<?php

namespace App\Http\Controllers;

use App\Models\Templates;
use Illuminate\Http\Request;
use Template;

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('het');
        return Templates::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return Templates::create([
            "userId" => $request->user()->id,
            "text" => $request->input('text')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function show(Templates $templates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Templates $templates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Templates $templates)
    {
        //
    }
}