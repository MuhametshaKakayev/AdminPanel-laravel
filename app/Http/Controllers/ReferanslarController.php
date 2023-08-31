<?php

namespace App\Http\Controllers;

use App\Models\Referanslar;
use Illuminate\Http\Request;

class ReferanslarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function referanShow()
    {
        return view("pages.referans");
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
    public function show(Referanslar $referanslar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Referanslar $referanslar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Referanslar $referanslar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Referanslar $referanslar)
    {
        //
    }
}
