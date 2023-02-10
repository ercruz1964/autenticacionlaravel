<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TipoDocumentoRequest;
use App\Models\TipoDocumento;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoDocumentos = TipoDocumento::paginate(5);
        return view('tipodocumento.index',['tipoDocumentos'=>$tipoDocumentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipodocumento.crear',['tipoDocumento'=> new TipoDocumento()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoDocumentoRequest $request)
    {
        TipoDocumento::create($request->validated());
        return redirect()->route('tipodocumento.index')->with('success','Tipo Documento Registrado');
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
        $tipoDocumento = TipoDocumento::find($id);
        return view('tipodocumento.editar',['tipoDocumento' => $tipoDocumento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoDocumentoRequest $request, $id)
    {
        $tipoDocumento = TipoDocumento::find($id);
        $tipoDocumento->update($request->validated());
        return redirect()->route('tipodocumento.index')->with('success','Tipo de Documento Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoDocumento = TipoDocumento::find($id);
        $tipoDocumento->delete();
        return redirect()->route('tipodocumento.index')->with('success','Tipo de Documento Eliminado');
    }
}
