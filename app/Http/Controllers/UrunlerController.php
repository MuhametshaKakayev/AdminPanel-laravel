<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Urunler;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class UrunlerController extends Controller
{

    public function kategoriShow()
    {
        $kategori = Kategori::all();
        return view("pages.urunler.kategori.kategori", compact("kategori"));
    }
    public function kategoriStoreShow()
    {
        $kategori = new kategori();
        return view("pages.urunler.kategori.kategoriStore", compact("kategori"));
    }

    public function kategoriEditShow($id)
    {
        $kategori = Kategori::find($id); // Doğru şekilde blogu bulmak için 'find' kullanılır.
        if (!$kategori) {
            return abort(404); // Blog bulunamazsa 404 hatası döndürün.
        }
        return view("pages.urunler.kategori.kategoriEdit", compact("kategori"));
    }
    public function kategoriStore(Request $request)
    {
        // Veri Doğrulama (Validation)
        $validatedData = $request->validate([
            'kBaslik' => 'required|string|max:255',
            'aciklama' => 'required',
            'sira' => 'required',
            'title' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            'arkaGorsel' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Örnek: JPEG veya PNG formatında, 2MB'den küçük
            'listGorsel' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // URL Adresini Oluşturma (Örnek: başlık -> baslik.html)
        $urlAdres = 'kategori/' . Str::slug($validatedData['kBaslik'], '-') . '.html';



        $file = $request->file('resim');
        $resim = $file->getClientOriginalName();
        $resim = Str::random(20) . '_' . $resim; // Formdan yüklenen dosya
        $file->storeAs('public/blog/listGorsel', $resim);

        $file1 = $request->file('resim2');
        $resim1 = $file1->getClientOriginalName();
        $resim1 = Str::random(20) . '_' . $resim1; // Formdan yüklenen dosya
        $file1->storeAs('public/blog/arkaGorsel', $resim1);


        // Yeni Haber Kaydı Oluşturma
        $kategori = new Kategori();
        $kategori->kBaslik = $validatedData['kBaslik'];
        $kategori->sira = $validatedData['sira'];
        $kategori->urlAdres = $urlAdres;
        $kategori->listGorsel = $resim;
        $kategori->arkaGorsel = $resim1;
        $kategori->aciklama = $validatedData['aciklama'];
        $kategori->title = $validatedData['title'];
        $kategori->keywords = $validatedData['keywords'];
        $kategori->description = $validatedData['description'];
        $kategori->save();

        // Başarı Mesajı
        return redirect()->route("kategoriShow")->with("message", "Başarılı bir şekilde eklendi");
    }

    public function kategoriedit(Request $request, $id)
    {
        $kategori = Kategori::where('id', $id)->first();
        $img1 = $kategori->listGorsel;
        $img2 = $kategori->arkaGorsel;

        if ($request->hasFile('resim')) {
            $request->validate([
                'resim' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            if ($kategori->listGorsel !== '') {
                Storage::delete('public/kategori/listGorsel/' . $kategori->listGorsel);
            }
            $uploadedFile = $request->file('resim');
            $originalFilename = $uploadedFile->getClientOriginalName();
            $img1 = Str::random(20) . '_' . $originalFilename;
            $uploadedFile->storeAs('public/kategori/listGorsel', $img1);
            $kategori->update([

                "listGorsel" => $img1,

            ]);
        }
        if ($request->hasFile('resim2')) {
            $request->validate([
                'resim2' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
            if ($kategori->arkaGorsel) {
                Storage::delete('public/kategori/arkaGorsel/' . $kategori->arkaGorsel);
            }
            $uploadedFile = $request->file('resim2');
            $originalFilename = $uploadedFile->getClientOriginalName();
            $img2 = Str::random(20) . '_' . $originalFilename;
            $uploadedFile->storeAs('public/kategori/arkaGorsel', $img2);
            $kategori->update([

                "arkaGorsel" => $img2,

            ]);
        }

        $validatedData = $request->validate([
            'kBaslik' => 'required|string|max:255',
            'aciklama' => 'required',

        ]);
        $urlAdres = 'kategori/' . Str::slug($validatedData['kBaslik'], '-') . '.html';

        $kategori->update([
            "kBaslik" => $request->input("kBaslik"),
            "sira" => $request->input("sira"),
            "içerik" => $request->input("içerik"),
            "title" => $request->input("title"),
            "keywords" => $request->input("keywords"),
            "description" => $request->input("description"),


        ]);

        return redirect()->route("kategoriShow")->with("message", "Başarılı bir şekilde güncellendi");
    }

    public function kategoriDelete($id)
    {
        $kategori = Kategori::find($id);

        if ($kategori->listGorsel !== '' && $kategori->arkaGorsel !== '') {

            Storage::delete('public/kategori/listGorsel/' . $kategori->listGorsel);
            Storage::delete('public/kategori/arkaGorsel/' . $kategori->arkaGorsel);

            // Dosyaları başarıyla sildikten sonra veriyi veritabanından kaldırın
            $kategori->delete();

            return redirect()->route('kategoriShow')->with("message", "Başarılı bir şekilde silindi");

        }
    }



    public function urunlerShow()
    {
        $urunler = Urunler::all();
        return view("pages.urunler.urunler",compact("urunler"));
    }

    public function urunlerStoreShow()
    {
        $urunler = new Urunler();
        return view("pages.urunler.urunlerStore", compact("urunler"));
    }

    public function urunlerEditShow($id)
    {
        $urunler = Urunler::find($id); // Doğru şekilde blogu bulmak için 'find' kullanılır.
        if (!$urunler) {
            return abort(404); // Blog bulunamazsa 404 hatası döndürün.
        }
        return view("pages.urunler.urunlerEdit", compact("urunler"));
    }
    public function urunlerStore(Request $request)
    {
        // Veri Doğrulama (Validation)
        $validatedData = $request->validate([
            'baslik' => 'required|string|max:255',
            'oneCikan' => 'required',
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
        $file->storeAs('public/urunler/listGorsel', $resim);

        $file1 = $request->file('resim2');
        $resim1 = $file1->getClientOriginalName();
        $resim1 = Str::random(20) . '_' . $resim1; // Formdan yüklenen dosya
        $file1->storeAs('public/urunler/arkaGorsel', $resim1);


        // Yeni Haber Kaydı Oluşturma
        $urunler = new Urunler();
        $urunler->baslik = $validatedData['baslik'];
        $urunler->oneCikan = $validatedData['oneCikan'];
        $urunler->urlAdres = $urlAdres;
        $urunler->listGorsel = $resim;
        $urunler->arkaGorsel = $resim1;
        $urunler->icerik = $validatedData['icerik'];
        $urunler->title = $validatedData['title'];
        $urunler->keywords = $validatedData['keywords'];
        $urunler->description = $validatedData['description'];
        $urunler->save();

        // Başarı Mesajı
        return redirect()->route("urunlerShow")->with("message", "Başarılı bir şekilde eklendi");
    }

    public function urunEdit(Request $request, $id)
    {
        $urunler = Urunler::where('id', $id)->first();
        $img1 = $urunler->listGorsel;
        $img2 = $urunler->arkaGorsel;

        if ($request->hasFile('resim')) {
            $request->validate([
                'resim' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            if ($urunler->listGorsel !== '') {
                Storage::delete('public/urunler/listGorsel/' . $urunler->listGorsel);
            }
            $uploadedFile = $request->file('resim');
            $originalFilename = $uploadedFile->getClientOriginalName();
            $img1 = Str::random(20) . '_' . $originalFilename;
            $uploadedFile->storeAs('public/urunler/listGorsel', $img1);
            $urunler->update([

                "listGorsel" => $img1,

            ]);
        }
        if ($request->hasFile('resim2')) {
            $request->validate([
                'resim2' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
            if ($urunler->arkaGorsel) {
                Storage::delete('public/urunler/arkaGorsel/' . $urunler->arkaGorsel);
            }
            $uploadedFile = $request->file('resim2');
            $originalFilename = $uploadedFile->getClientOriginalName();
            $img2 = Str::random(20) . '_' . $originalFilename;
            $uploadedFile->storeAs('public/urunler/arkaGorsel', $img2);
            $urunler->update([

                "arkaGorsel" => $img2,

            ]);
        }

        $validatedData = $request->validate([
            'baslik' => 'required|string|max:255',
            'icerik' => 'required',

        ]);
        $urlAdres = Str::slug($validatedData['baslik'], '-') . '.html';

        $urunler->update([
            "baslik" => $request->input("baslik"),
            "oneCikan" => $request->input("oneCikan"),
            "icerik" => $request->input("icerik"),
            "urlAdres" => $urlAdres,
            "title" => $request->input("title"),
            "keywords" => $request->input("keywords"),
            "description" => $request->input("description"),
        ]);

        return redirect()->route("urunlerShow")->with("message", "Başarılı bir şekilde güncellendi");
    }

    public function urunDelete($id)
    {
        $urunler = Urunler::find($id);

        if ($urunler->listGorsel !== '' && $urunler->arkaGorsel !== '') {

            Storage::delete('public/urunler/listGorsel/' . $urunler->listGorsel);
            Storage::delete('public/urunler/arkaGorsel/' . $urunler->arkaGorsel);

            // Dosyaları başarıyla sildikten sonra veriyi veritabanından kaldırın
            $urunler->delete();

            return redirect()->route('urunlerShow')->with("message", "Başarılı bir şekilde silindi");

        }
    }


}
