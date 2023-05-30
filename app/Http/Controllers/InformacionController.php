<?php

namespace App\Http\Controllers;
use App\Models\informacion;
use Illuminate\Http\Request;

class InformacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Informacion';
        $datos_informacion = Informacion::all();
        return view('informacion', compact('titulo','datos_informacion'));
        //return view('informacion', compact('datos_informacion'));
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
     * @param  \App\Models\informacion  $informacion
     * @return \Illuminate\Http\Response
     */
    public function show(informacion $informacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\informacion  $informacion
     * @return \Illuminate\Http\Response
     */
    public function edit(informacion $informacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\informacion  $informacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, informacion $informacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\informacion  $informacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(informacion $informacion)
    {
        //
    }
}
