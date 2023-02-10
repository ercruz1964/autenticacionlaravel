@extends('layouts.app')
@section('title','tipoafiliacion')
@section('content')
<div class="container-fluid w-50 mt-2">
    <a href="{{route('tipoafiliacion.create')}}" type="button" class="btn btn-success">Crear Afiliacion</a>
    @if (session('success'))
    <h5 class="alert alert-success">{{ session('success') }}</h5>
    @endif
    @if(count($tipoAfiliaciones) > 0)
    <table class="table table-striped table-dark mt-3">
        <thead>
            <tr>
                <th>Nombre Afiliacion</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipoAfiliaciones as $item)
            <tr>
                <td>{{$item->tipoAfiliacion}}</td>
                <td>
                    <div class="d-flex flex-row mb-3">
                        <a type="button" href="{{route('tipoafiliacion.edit',$item->id)}}" class="btn btn-primary">Actualizar</a>
                        <form action="{{ route('tipoafiliacion.destroy',$item->id) }}" method="POST">
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