<?php

namespace App\Http\Controllers;

use App\Models\Belgeler;
use Illuminate\Http\Request;

class BelgelerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function belgelerShow()
    {
        return view("pages.belgeler");
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
    public function show(Belgeler $belgeler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Belgeler $belgeler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Belgeler $belgeler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Belgeler $belgeler)
    {
        //
    }
}
