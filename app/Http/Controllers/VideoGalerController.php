<?php

namespace App\Http\Controllers;

use App\Models\VideoGaler;
use Illuminate\Http\Request;

class VideoGalerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function videoGaleriShow()
    {
        return view("pages.videoGaleri");
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
    public function show(VideoGaler $videoGaler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoGaler $videoGaler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VideoGaler $videoGaler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoGaler $videoGaler)
    {
        //
    }
}
