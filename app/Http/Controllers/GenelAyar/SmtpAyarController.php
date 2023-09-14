<?php
namespace App\Http\Controllers\GenelAyar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GenelAyar\SmtpAyar;

class SmtpAyarController extends Controller
{
    public function smtpUpdate(Request $request)
{
    $optionsSmpt = SmtpAyar::first();

    $optionsSmpt->update([
        "host" => $request->input('host'),
        "port" => $request->input('port'),
        "protokol" => $request->input('protokol'), // Düzeltildi
        "usermail" => $request->input('usermail'),
        "password" => $request->input('password'),
    ]);

    return redirect()->route("optionShow")->with("message", "Başarılı bir şekilde güncellendi");
}


}
