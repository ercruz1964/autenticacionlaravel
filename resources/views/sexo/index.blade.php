@extends('layouts.app')
@section('title','sexo')
@section('content')
<div class="container-fluid w-50 mt-2">
    <a href="{{route('sexo.create')}}" type="button" class="btn btn-success">Crear Afiliacion</a>
    @if (session('success'))
    <h5 class="alert alert-success">{{ session('success') }}</h5>
    @endif
    @if(count($sexos) > 0)
    <table class="table table-striped table-dark mt-3">
        <thead>
            <tr>
                <th>Nombre Genero</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sexos as $item)
            <tr>
                <td>{{$item->nombreSexo}}</td>
                <td>
                    <div class="d-flex flex-row mb-3">
                        <a type="button" href="{{route('sexo.edit',$item->id)}}" class="btn btn-primary">Actualizar</a>
                        <form action="{{ route('sexo.destroy',$item->id) }}" method="POST">
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