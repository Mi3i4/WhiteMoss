<?php

namespace App\Http\Controllers;

use App\Models\Exhibitions;
use Illuminate\Http\Request;

class ControllerExhibitions extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $data; 
    
     public function index(Exhibitions $exhibitions)
    {
        $data = $exhibitions->show(); 
        return view('exhibitions',  array('page' => $data['page'], 'header_footer' => $data['header_footer']));
    }

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
     * @param  \App\Models\Exhibitions  $exhibitions
     * @return \Illuminate\Http\Response
     */
    public function show(Exhibitions $exhibitions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exhibitions  $exhibitions
     * @return \Illuminate\Http\Response
     */
    public function edit(Exhibitions $exhibitions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exhibitions  $exhibitions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exhibitions $exhibitions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exhibitions  $exhibitions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exhibitions $exhibitions)
    {
        //
    }
}
