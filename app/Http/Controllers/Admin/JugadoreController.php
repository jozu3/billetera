<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jugadore;
use Illuminate\Http\Request;

class JugadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugadore::all();

        return view('admin.jugadores.index', compact('jugadores'));
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
     * @param  \App\Models\Jugadore  $jugadore
     * @return \Illuminate\Http\Response
     */
    public function show(Jugadore $jugadore)
    {
        // dd($jugadore);

        return view('admin.jugadores.show', compact('jugadore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jugadore  $jugadore
     * @return \Illuminate\Http\Response
     */
    public function edit(Jugadore $jugadore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jugadore  $jugadore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugadore $jugadore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jugadore  $jugadore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugadore $jugadore)
    {
        //
    }
}
