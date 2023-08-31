<?php

namespace App\Http\Controllers;

use App\Models\FotoSlider;
use Illuminate\Http\Request;

class FotoSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function fotoSliderShow()
    {
        return view("pages.fotoSlider");
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
    public function show(FotoSlider $fotoSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FotoSlider $fotoSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FotoSlider $fotoSlider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FotoSlider $fotoSlider)
    {
        //
    }
}
