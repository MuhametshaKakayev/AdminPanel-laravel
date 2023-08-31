<?php

namespace App\Http\Controllers;

use App\Models\Urunler;
use Illuminate\Http\Request;

class UrunlerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function urunlerShow()
    {
        return view("pages.urunler");
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
    public function show(Urunler $urunler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Urunler $urunler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Urunler $urunler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Urunler $urunler)
    {
        //
    }
}
