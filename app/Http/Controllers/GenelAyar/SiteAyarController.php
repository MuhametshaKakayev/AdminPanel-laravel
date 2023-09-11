<?php

namespace App\Http\Controllers\GenelAyar;

use App\Http\Controllers\Controller;
use App\Models\GenelAyar\SiteAyar;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SiteAyarController extends Controller
{
    public function optionShow()
    {
        $site_ayar = DB::table('site_ayars')->get();
        $site_bilgi = DB::table('site_bilgis')->get();
        $smtp_ayar = DB::table('smtp_ayars')->get();

        return view("pages.adminGenelAyar", compact("site_ayar","site_bilgi","smtp_ayar",));

    }

    public function optionUpdate(Request $request)
{
    // Veritabanından SiteAyar modelini alın
    $options = SiteAyar::first();

    // Veritabanından kayıt bulunamazsa hata mesajı gönderin
    if ($request->hasFile('logo'))
    {
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

    if ($options->listGorsel !== '')
    {
        Storage::delete('public/logo/' . $options->logo);
    }

        $uploadedFile = $request->file('logo');
        $originalFileExt = $uploadedFile->getClientOriginalExtension();
        $filename = time(). Str::random(5) . '.' .$originalFileExt ;
        $filePath = $uploadedFile->storeAs('public/logo', $filename);

        $options->update([
            "logo" => $filename
        ]);
    }

    $options->update([
        "default_dil" => $request->input('default_dil'),
        "permalink" => $request->input('permalink'),
        "aslogan" => $request->input('aslogan'),
        "ahizmet" => $request->input('ahizmet'),
        "aourunler" => $request->input('aourunler'),
        "abloklar" => $request->input('abloklar'),
        "areferans" => $request->input('areferans'),
        "renk1" => $request->input('renk1'),
        "renk2" => $request->input('renk2'),
    ]);

    return redirect()->route("optionShow")->with("message","Başarılı bir şekilde güncellendi" );
}




}
