<?php

namespace App\Http\Controllers;

use App\Models\cast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailCastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugas = Cast::orderBy('id',)->paginate(5);
        return view('cast.cast',compact('cast'))
                ;
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
     * @param  \App\Models\cast  $cast
     * @return \Illuminate\Http\Response
     */
    public function show(cast $cast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cast  $cast
     * @return \Illuminate\Http\Response
     */
    public function edit(cast $cast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cast  $cast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cast $cast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cast  $cast
     * @return \Illuminate\Http\Response
     */
    public function destroy(cast $cast)
    {
        //
    }
}
