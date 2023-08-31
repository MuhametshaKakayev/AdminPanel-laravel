<?php

namespace App\Http\Controllers\GenelAyar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteAyarController extends Controller
{
    public function optionShow()
    {

        return view("pages.adminGenelAyar");

    }
}
