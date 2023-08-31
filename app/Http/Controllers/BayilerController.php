<?php

namespace App\Http\Controllers;

use App\Models\Bayiler;
use Illuminate\Http\Request;

class BayilerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function bayilerShow()
    {
        return view("pages.bayiler");
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
    public function show(Bayiler $bayiler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bayiler $bayiler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bayiler $bayiler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bayiler $bayiler)
    {
        //
    }
}
