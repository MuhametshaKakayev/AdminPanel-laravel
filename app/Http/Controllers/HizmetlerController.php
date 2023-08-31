<?php

namespace App\Http\Controllers;

use App\Models\Hizmetler;
use Illuminate\Http\Request;

class HizmetlerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function hizmetShow()
    {
        return view("pages.hizmetler");
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
    public function show(Hizmetler $hizmetler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hizmetler $hizmetler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hizmetler $hizmetler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hizmetler $hizmetler)
    {
        //
    }
}
