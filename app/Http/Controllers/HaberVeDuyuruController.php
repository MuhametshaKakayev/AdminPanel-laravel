<?php

namespace App\Http\Controllers;

use App\Models\HaberVeDuyuru;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class HaberVeDuyuruController extends Controller
{

    public function haberStoreShow()
    {
        $news = HaberVeDuyuru::all();
        $news = new HaberVeDuyuru();
        return view("pages.haber.haberCreate", compact("news"));
    }

    public function hbrDuyuruShow()
    {
        $news = HaberVeDuyuru::all();
        return view("pages.haber.haberVeDuyuru", compact("news"));
    }
    public function haberEditShow($id)
    {
        $news = HaberVeDuyuru::find($id);
        if (!$news) {
            return abort(404); // Blog bulunamazsa 404 hatası döndürün.
        }
        return view("pages.haber.haberEdit", compact("news"));
    }

    public function haberStore(Request $request)
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
        $file->storeAs('public/haber/listGorsel', $resim);

        $file1 = $request->file('resim2');
        $resim1 = $file1->getClientOriginalName();
        $resim1 = Str::random(20) . '_' . $resim1; // Formdan yüklenen dosya
        $file1->storeAs('public/haber/arkaGorsel', $resim1);




        // Yeni Haber Kaydı Oluşturma
        $news = new HaberVeDuyuru();
        $news->baslik = $validatedData['baslik'];
        $news->urlAdres = $urlAdres;
        $news->icerik = $validatedData['icerik'];
        $news->listGorsel = $resim;
        $news->arkaGorsel = $resim1;
        $news->title = $validatedData['title'];
        $news->keywords = $validatedData['keywords'];
        $news->description = $validatedData['description'];
        $news->save();

        // Başarı Mesajı
        return redirect()->route("hbrDuyuruShow")->with("message", "Başarılı bir şekilde eklendi");
    }


    public function haberUpdate(Request $request, $id)
    {
        $table = HaberVeDuyuru::where('id', $id)->first();
        $img1 = $table->listGorsel;
        $img2 = $table->arkaGorsel;

        if ($request->hasFile('resim')) {
            $request->validate([
                'resim' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            if ($table->listGorsel !== '') {
                Storage::delete('public/haber/listGorsel/' . $table->listGorsel);
            }
            $uploadedFile = $request->file('resim');
            $originalFilename = $uploadedFile->getClientOriginalName();
            $img1 = Str::random(20) . '_' . $originalFilename;
            $uploadedFile->storeAs('public/haber/listGorsel', $img1);
            $table->update([

                "listGorsel" => $img1,

            ]);
        }
        if ($request->hasFile('resim2')) {
            $request->validate([
                'resim2' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
            if ($table->arkaGorsel) {
                Storage::delete('public/haber/arkaGorsel/' . $table->arkaGorsel);
            }
            $uploadedFile = $request->file('resim2');
            $originalFilename = $uploadedFile->getClientOriginalName();
            $img2 = Str::random(20) . '_' . $originalFilename;
            $uploadedFile->storeAs('public/haber/arkaGorsel', $img2);
            $table->update([

                "arkaGorsel" => $img2,

            ]);
        }

        $validatedData = $request->validate([
            'baslik' => 'required|string|max:255',
            'icerik' => 'required',
            'description' => 'required',
        ]);
        $urlAdres = Str::slug($validatedData['baslik'], '-') . '.html';

        $table->update([
            "baslik" => $request->input("baslik"),
            "urlAdres" => $urlAdres,
            "icerik" => $request->input("icerik"),
            "title" => $request->input("title"),
            "keywords" => $request->input("keywords"),
            "description" => $request->input("description"),
        ]);

        return redirect()->route("hbrDuyuruShow")->with("message", "Başarılı bir şekilde güncellendi");
    }



    public function haberDelete($id)
    {
        $news = HaberVeDuyuru::find($id);


    if ($news->listGorsel !== '' && $news->arkaGorsel !== '') {

        Storage::delete('public/haber/listGorsel/' . $news->listGorsel);
        Storage::delete('public/haber/arkaGorsel/' . $news->arkaGorsel);
        $news->delete();

        return redirect()->route('blogShow')->with("message", "Başarılı bir şekilde silindi");
    }
    }

    public function blogDeleteAll()
    {
        // Tüm blogları al
        $news = HaberVeDuyuru::all();

        if ($news->listGorsel !== '' && $news->arkaGorsel !== '') {

            Storage::delete('public/haber/listGorsel/' . $news->listGorsel);
            Storage::delete('public/haber/arkaGorsel/' . $news->arkaGorsel);
            $news->delete();

            return redirect()->route('blogShow')->with("message", "Başarılı bir şekilde silindi");

    }

    }

}
