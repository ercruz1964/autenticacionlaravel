<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sexo;
use App\Http\Requests\SexoRequest;

class SexoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sexos = Sexo::paginate(5);
        return view('sexo.index',['sexos' => $sexos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sexo.crear',['sexo'=>new Sexo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SexoRequest $request)
    {
        Sexo::create($request->validated());
        return redirect()->route('sexo.index')->with('success','Genero Registrada');        ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sexo = Sexo::find($id);
        return view('sexo.editar',['sexo' => $sexo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SexoRequest $request, $id)
    {
        $sexo = Sexo::find($id);
        $sexo->update($request->validated());
        return redirect()->route('sexo.index')->with('success','Genero Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sexo = Sexo::find($id);
        $sexo->delete();
        return redirect()->route('sexo.index')->with('success', 'Genero Eliminado');
    }
}
