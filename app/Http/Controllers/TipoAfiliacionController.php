<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoAfiliacion;
use App\Http\Requests\TipoAfiliacionRequest;

class TipoAfiliacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoAfiliaciones = TipoAfiliacion::paginate(5);
        return view('tipoafiliacion.index',['tipoAfiliaciones'=>$tipoAfiliaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoafiliacion.crear',['tipoAfiliacion'=>new TipoAfiliacion()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoAfiliacionRequest $request)
    {
        TipoAfiliacion::create($request->validated());
        return redirect()->route('tipoafiliacion.index')->with('success','Tipo Afiliacion Registrada');        ;
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
        $tipoAfiliacion = TipoAfiliacion::find($id);
        return view('tipoafiliacion.editar',['tipoAfiliacion'=>$tipoAfiliacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoAfiliacionRequest $request, $id)
    {
        $tipoAfiliacion = TipoAfiliacion::find($id);
        $tipoAfiliacion->update($request->validated());
        return redirect()->route('tipoafiliacion.index')->with('success','Tipo Afiliacion Actualizada');        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoAfiliacion = TipoAfiliacion::find($id);
        $tipoAfiliacion->delete();
        return redirect()->route('tipoafiliacion.index')->with('success','Tipo Afiliacion Eiminada');
    }
}
