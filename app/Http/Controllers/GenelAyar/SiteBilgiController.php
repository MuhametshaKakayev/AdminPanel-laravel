<?php
namespace App\Http\Controllers\GenelAyar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GenelAyar\SiteBilgi;


class SiteBilgiController extends Controller
{
    public function optInfoUpdate(Request $request)
    {


        $optionsİnfo = SiteBilgi::first();

        $optionsİnfo->update([
            "title" => $request->input('title'),
            "keywords" => $request->input('keywords'),
            "description" => $request->input('description'),
            "facebook" => $request->input('facebook'),
            "twitter" => $request->input('twitter'),
            "instagram" => $request->input('instagram'),
            "googlePlus" => $request->input('googlePlus'),
            "googleMaps" => $request->input('googleMaps'),
            "slogan1" => $request->input('slogan1'),
            "slogan2" => $request->input('slogan2'),
            "telefon" => $request->input('telefon'),
            "faks" => $request->input('faks'),
            "eposta" => $request->input('eposta'),
            "adres" => $request->input('adres'),
            "analytics" => $request->input('analytics'),
        ]);

        return redirect()->route("optionShow")->with("message","Başarılı bir şekilde güncellendi" );
    }


}
