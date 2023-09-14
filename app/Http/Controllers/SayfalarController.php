<?php

namespace App\Http\Controllers;

use App\Models\Sayfalar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SayfalarController extends Controller
{
    public function sayfalarShow()
    {
        $pages = Sayfalar::all();
        return view("pages.sayfa.sayfalar", compact("pages"));
    }

    public function sayfaStoreShow()
    {
        $pages = new Sayfalar();
        return view("pages.sayfa.sayfaCreate", compact("pages"));
    }

    public function sayfaStore(Request $request)
    {
        // Veri Doğrulama (Validation)
        $validatedData = $request->validate([
            'baslik' => 'required|string|max:255',
            'icerik' => 'required',
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
        $file->storeAs('public/pages/listGorsel', $resim);

        $file1 = $request->file('resim2');
        $resim1 = $file1->getClientOriginalName();
        $resim1 = Str::random(20) . '_' . $resim1; // Formdan yüklenen dosya
        $file1->storeAs('public/pages/arkaGorsel', $resim1);


        // Yeni Haber Kaydı Oluşturma
        $pages = new Sayfalar();
        $pages->baslik = $validatedData['baslik'];
        $pages->urlAdres = $urlAdres;
        $pages->icerik = $validatedData['icerik'];
        $pages->listGorsel = $resim;
        $pages->arkaGorsel = $resim1;
        $pages->title = $validatedData['title'];
        $pages->keywords = $validatedData['keywords'];
        $pages->description = $validatedData['description'];

        $pages->save();
        // Başarı Mesajı
        return redirect()->route("sayfalarShow")->with("message", "Başarılı bir şekilde eklendi");
    }
    public function sayfaEditShow($id)
    {
        $pages = Sayfalar::find($id); // Doğru şekilde blogu bulmak için 'find' kullanılır.
        if (!$pages) {
            return abort(404); // Blog bulunamazsa 404 hatası döndürün.
        }
        return view("pages.sayfa.sayfaEdit", compact("pages"));
    }

    public function sayfaUpdate(Request $request, $id)
    {
        $pages = Sayfalar::where('id', $id)->first();
        $img1 = $pages->listGorsel;
        $img2 = $pages->arkaGorsel;

        if ($request->hasFile('resim')) {
            $request->validate([
                'resim' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            if ($pages->listGorsel !== '') {
                Storage::delete('public/pages/listGorsel/' . $pages->listGorsel);
            }
            $uploadedFile = $request->file('resim');
            $originalFilename = $uploadedFile->getClientOriginalName();
            $img1 = Str::random(20) . '_' . $originalFilename;
            $uploadedFile->storeAs('public/pages/listGorsel', $img1);
            $pages->update([

                "listGorsel" => $img1,

            ]);
        }
        if ($request->hasFile('resim2')) {
            $request->validate([
                'resim2' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
            if ($pages->arkaGorsel) {
                Storage::delete('public/pages/arkaGorsel/' . $pages->arkaGorsel);
            }
            $uploadedFile = $request->file('resim2');
            $originalFilename = $uploadedFile->getClientOriginalName();
            $img2 = Str::random(20) . '_' . $originalFilename;
            $uploadedFile->storeAs('public/pages/arkaGorsel', $img2);
            $pages->update([

                "arkaGorsel" => $img2,

            ]);
        }
        $validatedData = $request->validate([
            'baslik' => 'required|string|max:255',
            'icerik' => 'required',

        ]);
        $urlAdres = Str::slug($validatedData['baslik'], '-') . '.html';

        $pages->update([
            "baslik" => $request->input("baslik"),
            "urlAdres" => $urlAdres,
            "icerik" => $request->input("icerik"),
            "title" => $request->input("title"),
            "keywords" => $request->input("keywords"),
            "description" => $request->input("description"),

        ]);
        return redirect()->route("sayfalarShow")->with("message", "Başarılı bir şekilde güncellendi");
    }


    public function sayfaDelete($id)
    {
        $pages = Sayfalar::find($id);

        if ($pages->listGorsel !== '' && $pages->arkaGorsel !== '') {

            Storage::delete('public/pages/listGorsel/' . $pages->listGorsel);
            Storage::delete('public/pages/arkaGorsel/' . $pages->arkaGorsel);

            // Dosyaları başarıyla sildikten sonra veriyi veritabanından kaldırın
            $pages->delete();

            return redirect()->route('sayfalarShow')->with("message", "Başarılı bir şekilde silindi");

        }
    }

}
