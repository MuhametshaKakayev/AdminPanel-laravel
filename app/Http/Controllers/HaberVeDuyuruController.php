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
        return view("pages.haberVeDuyuru",compact("news"));
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
    public function show(HaberVeDuyuru $haberVeDuyuru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HaberVeDuyuru $haberVeDuyuru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HaberVeDuyuru $haberVeDuyuru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HaberVeDuyuru $haberVeDuyuru)
    {
        //
    }
}
