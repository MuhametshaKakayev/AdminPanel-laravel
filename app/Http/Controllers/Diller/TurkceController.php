<?php

namespace App\Http\Controllers\Diller;

use App\Http\Controllers\Controller;
use App\Models\Turkce;
use Illuminate\Http\Request;

class TurkceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dillerShowTr()
    {
        return view("pages.dillerTr");
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
    public function show(Turkce $turkce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Turkce $turkce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Turkce $turkce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Turkce $turkce)
    {
        //
    }
}
