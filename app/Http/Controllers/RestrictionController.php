<?php

namespace App\Http\Controllers;

use App\Models\Restriction;
use Illuminate\Http\Request;

class RestrictionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('restriction');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function restrictions(Request $request)
    {

        return view('restriction',compact('request'));
    }
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restriction  $restriction
     * @return \Illuminate\Http\Response
     */
    public function show(Restriction $restriction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restriction  $restriction
     * @return \Illuminate\Http\Response
     */
    public function edit(Restriction $restriction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restriction  $restriction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restriction $restriction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restriction  $restriction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restriction $restriction)
    {
        //
    }
}
