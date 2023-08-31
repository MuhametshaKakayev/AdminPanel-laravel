<?php

namespace App\Http\Controllers;

use App\Models\Sayfalar;
use Illuminate\Http\Request;

class SayfalarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function sayfalarShow()
    {
        $pages=Sayfalar::all();
        return view("pages.sayfalar",compact("pages"));
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
    public function show(Sayfalar $sayfalar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sayfalar $sayfalar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sayfalar $sayfalar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sayfalar $sayfalar)
    {
        //
    }
}
