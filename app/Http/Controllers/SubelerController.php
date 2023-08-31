<?php

namespace App\Http\Controllers;

use App\Models\Subeler;
use Illuminate\Http\Request;

class SubelerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function subelerShow()
    {
        return view("pages.subeler");
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
    public function show(Subeler $subeler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subeler $subeler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subeler $subeler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subeler $subeler)
    {
        //
    }
}
