<?php
namespace App\Http\Controllers\GenelAyar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GenelAyar\SmtpAyar;

class SmtpAyarController extends Controller
{
    public function optSmptUpdate(Request $request)
    {

        $optionsSmpt = SmtpAyar::all();
        $optionsSmpt = SmtpAyar::first();

        $optionsSmpt->update([
            "smtp_host" => $request->input('smtp_host'),
            "smtp_port" => $request->input('smtp_port'),
            "smpt_protokol" => $request->input('smpt_protokol'),
            "smpt_usermail" => $request->input('smpt_usermail'),
            "smtp_password" => $request->input('smtp_password'),
        ]);

        return redirect()->route("optionShow")->with("message","Başarılı bir şekilde güncellendi" );
    }
}
