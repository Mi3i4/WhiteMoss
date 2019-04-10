<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use Illuminate\Http\Request;

class ControllerPartners extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    protected $data;
    
    public function index(Partners $partners)
    {
        $data = $partners->show(); 
        return view('partners',  array('page' => $data['page'], 'header_footer' => $data['header_footer']));
    }
    //
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function show(Partners $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function edit(Partners $partners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partners $partners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partners $partners)
    {
        //
    }
}
