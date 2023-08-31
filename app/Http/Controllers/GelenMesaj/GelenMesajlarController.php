<?php
namespace App\Http\Controllers\GelenMesaj;

use App\Models\GelenMesajlar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GelenMesajlarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function mesageShow()
    {
        $mesajlar=GelenMesajlar::all();
        return view("pages.gelenMesajlar" ,compact("mesajlar"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GelenMesajlar $gelenMesajlar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GelenMesajlar $gelenMesajlar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GelenMesajlar $gelenMesajlar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GelenMesajlar $gelenMesajlar)
    {
        //
    }
}
