@extends('layouts.app')
@section('title','Tipos de Documento')
@section('content')
<div class="container-fluid w-50 mt-2">
    <a href="{{route('tipodocumento.create')}}" type="button" class="btn btn-success">Crear Tipo Documento</a>
    @if (session('success'))
    <h5 class="alert alert-success">{{ session('success') }}</h5>
    @endif
    @if(count($tipoDocumentos) > 0)
    <table class="table table-striped table-dark mt-3">
        <thead>
            <tr>
                <th>Nombre Tipo Documento</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipoDocumentos as $item)
            <tr>
                <td>{{$item->nombreTipoDocumento}}</td>
                <td>
                    <div class="d-flex flex-row mb-3">
                        <a type="button" href="{{route('tipodocumento.edit',$item->id)}}" class="btn btn-primary">Actualizar</a>
                        <form action="{{ route('tipodocumento.destroy',$item->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection