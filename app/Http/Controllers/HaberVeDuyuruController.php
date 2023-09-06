<?php

namespace App\Http\Controllers;

use App\Models\HaberVeDuyuru;
use Illuminate\Http\Request;

class HaberVeDuyuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function hbrDuyuruShow()
    {
        $news=HaberVeDuyuru::all();
        return view("pages.haber.haberVeDuyuru",compact("news"));
    }

    public function haberEditShow($id)
    {
        $news=HaberVeDuyuru::find($id);
        if (!$news) {
            return abort(404); // Blog bulunamazsa 404 hatası döndürün.
        }
        return view("pages.haber.haberEdit",compact("news"));
    }



    public function haberUpdate(Request $request, $id)
{
    $url = $request->input('baslik');
    $modifiedUrl = str_replace(' ', '-', $url) . '.html';
    $news = HaberVeDuyuru::find($id);
    if (!$news) {
        return abort(404); // Blog bulunamazsa 404 hatası döndürün.
    }

    // Diğer alanları güncellemeyi unutmayın
    $news->update([
        "baslik" => $request->input("baslik"),
        "urlAdres" => $modifiedUrl,
        "icerik" => $request->input("icerik"),
        "keywords" => $request->input("keywords"),
        "description" => $request->input("description"),
        //Diğer alanlar için de güncelleme ekleyin
    ]);

    return redirect()->route("blogShow")->with("message", "Başarılı bir şekilde güncellendi");
}


    public function blogDelete($id)
    {
        $news = HaberVeDuyuru::find($id);

        if ($news)
         {
            $news->delete();
            return redirect()->back();
        }
        else
        {
            return redirect()->back();
        }
    }



}
