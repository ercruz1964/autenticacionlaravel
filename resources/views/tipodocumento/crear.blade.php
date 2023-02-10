@extends('layouts.app')
@section('title','Crear Tipo Documento')
@section('content')
<div class="container-fluid w-50 mt-2">
    <div class="card">        
        <div class="card-body">
            <h5 class="card-title">Crear Tipo Documento</h5>
            @if (session('success'))
            <h5 class="alert alert-success">{{ session('success') }}</h5>
            @endif
            <form action="{{ route('tipodocumento.store')}}" method="post">
                @csrf
                @include('tipodocumento.formfields')
                <div class="col-auto mt-3">
                <button type="submit" name="enviar" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
