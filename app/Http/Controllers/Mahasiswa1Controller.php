<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\mahasiswa1;

class Mahasiswa1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswa' =>$mahasiswa]);
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
     * @param  \App\mahasiswa1  $mahasiswa1
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa1 $mahasiswa1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswa1  $mahasiswa1
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa1 $mahasiswa1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswa1  $mahasiswa1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa1 $mahasiswa1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswa1  $mahasiswa1
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa1 $mahasiswa1)
    {
        //
    }
}
