<?php

namespace App\Http\Controllers;

use App\Models\Fotogaler;
use Illuminate\Http\Request;

class FotogalerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function fotoGaleriShow()
    {
        $fotos=Fotogaler::all();
        return view("pages.fotoGaleri",compact("fotos"));
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
    public function show(Fotogaler $fotogaler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fotogaler $fotogaler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fotogaler $fotogaler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fotogaler $fotogaler)
    {
        //
    }
}
