@extends('layouts.app')
@section('title','Editar Tipo Documento')
@section('content')
<div class="container-fluid w-50 mt-2">
    <div class="card">        
        <div class="card-body">
            <h5 class="card-title">Editar Tipo Documento</h5>
            @if (session('success'))
            <h5 class="alert alert-success">{{ session('success') }}</h5>
            @endif
            <form action="{{ route('tipodocumento.update',$tipoDocumento->id)}}" method="post">
                @csrf
                @method('PATCH')
                @include('tipodocumento.formfields')
                <div class="col-auto mt-3">
                <button type="submit" name="enviar" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
