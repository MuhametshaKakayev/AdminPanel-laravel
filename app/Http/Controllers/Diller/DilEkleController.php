<?php

namespace App\Http\Controllers\Diller;

use App\Http\Controllers\Controller;
use App\Models\Dilekle;
use Illuminate\Http\Request;

class DilekleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dillerShow()
    {

        return view("pages.diller.dilEkle");
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
    public function show(Dilekle $dilekle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dilekle $dilekle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dilekle $dilekle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dilekle $dilekle)
    {
        //
    }
}
