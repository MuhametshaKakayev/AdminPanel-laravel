<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    public function blogUpdate(Request $request, $id)
{
    $url = $request->input('baslik');
    $modifiedUrl = str_replace(' ', '-', $url) . '.html';
    $blog = Blog::find($id);
    if (!$blog) {
        return abort(404); // Blog bulunamazsa 404 hatası döndürün.
    }

    // Diğer alanları güncellemeyi unutmayın
    $blog->update([
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
        $blog = Blog::find($id);

        if ($blog)
         {
            $blog->delete();
            return redirect()->back();
        }
        else
        {
            return redirect()->back();
        }
    }


}
