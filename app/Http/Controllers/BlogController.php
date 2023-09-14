<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{

    public function blogShow()
    {
        $blog = Blog::all();
        return view("pages.blog.blog", compact("blog"));
    }

    public function blogEditShow($id)
    {
        $blog = Blog::find($id); // Doğru şekilde blogu bulmak için 'find' kullanılır.
        if (!$blog) {
            return abort(404); // Blog bulunamazsa 404 hatası döndürün.
        }
        return view("pages.blog.blogEdit", compact("blog"));
    }

    public function blogStoreShow()
    {
        $blog = new Blog();
        return view("pages.blog.blogCreate", compact("blog"));
    }

    public function blogStore(Request $request)
    {
        // Veri Doğrulama (Validation)
        $validatedData = $request->validate([
            'baslik' => 'required|string|max:255',
            'içerik' => 'required',
            'title' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            'arkaGorsel' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Örnek: JPEG veya PNG formatında, 2MB'den küçük
            'listGorsel' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // URL Adresini Oluşturma (Örnek: başlık -> baslik.html)
        $urlAdres = Str::slug($validatedData['baslik'], '-') . '.html';


        $file = $request->file('resim');
        $resim = $file->getClientOriginalName();
        $resim = Str::random(20) . '_' . $resim; // Formdan yüklenen dosya
        $file->storeAs('public/blog/listGorsel', $resim);

        $file1 = $request->file('resim2');
        $resim1 = $file1->getClientOriginalName();
        $resim1 = Str::random(20) . '_' . $resim1; // Formdan yüklenen dosya
        $file1->storeAs('public/blog/arkaGorsel', $resim1);


        // Yeni Haber Kaydı Oluşturma
        $blog = new Blog();
        $blog->baslik = $validatedData['baslik'];
        $blog->urlAdres = $urlAdres;
        $blog->içerik = $validatedData['içerik'];
        $blog->listGorsel = $resim;
        $blog->arkaGorsel = $resim1;
        $blog->title = $validatedData['title'];
        $blog->keywords = $validatedData['keywords'];
        $blog->description = $validatedData['description'];

        $blog->save();

        // Başarı Mesajı
        return redirect()->route("blogShow")->with("message", "Başarılı bir şekilde eklendi");
    }

    public function blogUpdate(Request $request, $id)
    {
        $table = Blog::where('id', $id)->first();
        $img1 = $table->listGorsel;
        $img2 = $table->arkaGorsel;

        if ($request->hasFile('resim')) {
            $request->validate([
                'resim' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            if ($table->listGorsel !== '') {
                Storage::delete('public/blog/listGorsel/' . $table->listGorsel);
            }
            $uploadedFile = $request->file('resim');
            $originalFilename = $uploadedFile->getClientOriginalName();
            $img1 = Str::random(20) . '_' . $originalFilename;
            $uploadedFile->storeAs('public/blog/listGorsel', $img1);
            $table->update([

                "listGorsel" => $img1,

            ]);
        }
        if ($request->hasFile('resim2')) {
            $request->validate([
                'resim2' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
            if ($table->arkaGorsel) {
                Storage::delete('public/blog/arkaGorsel/' . $table->arkaGorsel);
            }
            $uploadedFile = $request->file('resim2');
            $originalFilename = $uploadedFile->getClientOriginalName();
            $img2 = Str::random(20) . '_' . $originalFilename;
            $uploadedFile->storeAs('public/blog/arkaGorsel', $img2);
            $table->update([

                "arkaGorsel" => $img2,

            ]);
        }

        $validatedData = $request->validate([
            'baslik' => 'required|string|max:255',
            'içerik' => 'required',

        ]);
        $urlAdres = Str::slug($validatedData['baslik'], '-') . '.html';

        $table->update([
            "baslik" => $request->input("baslik"),
            "urlAdres" => $urlAdres,
            "içerik" => $request->input("içerik"),
            "title" => $request->input("title"),
            "keywords" => $request->input("keywords"),
            "description" => $request->input("description"),

        ]);

        return redirect()->route("blogShow")->with("message", "Başarılı bir şekilde güncellendi");
    }



    public function blogDelete($id)
{
    $blog = Blog::find($id);

    if ($blog->listGorsel !== '' && $blog->arkaGorsel !== '') {

        Storage::delete('public/blog/listGorsel/' . $blog->listGorsel);
        Storage::delete('public/blog/arkaGorsel/' . $blog->arkaGorsel);

        // Dosyaları başarıyla sildikten sonra veriyi veritabanından kaldırın
        $blog->delete();

        return redirect()->route('blogShow')->with("message", "Başarılı bir şekilde silindi");

    }
}

    public function blogDeleteAll()
    {
        // Tüm blogları al
        $blogs = Blog::all();

        if (!$blogs->isEmpty()) {
            try {
                foreach ($blogs as $blog) {
                    if ($blog->listGorsel !== '') {
                        Storage::delete('public/haber/listGorsel/' . $blog->listGorsel);
                    }
                    if ($blog->arkaGorsel !== '') {
                        Storage::delete('public/haber/arkaGorsel/' . $blog->arkaGorsel);
                    }

                    // Her bir blogu veritabanından kaldır
                    $blog->delete();
                }

                return redirect()->route('blogShow')->with("message", "Başarılı bir şekilde silindi");
            } catch (\Exception $e) {
                // Hata durumunda kullanıcıya hata mesajı gösterin
                return redirect()->route('blogShow')->with('error', 'Delete failed: ' . $e->getMessage());
            }
        } else {
            return redirect()->route('blogShow')->with('error', 'Silinecek Blog yok');
        }
    }


}
