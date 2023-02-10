@extends('/layouts.app')
@section('title','Registrar Usuario')
@section('content')
<div class="container-fluid w-50 mt-2">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Registrar Usuario</h5>
            @if (session('success'))
            <h5 class="alert alert-success">{{ session('success') }}</h5>
            @endif
            <form action="{{ route('registrar.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Login</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nombreUsers" class="form-label">Nombres Usuario</label>
                    <input type="text" name="nombreUsers" class="form-control" value="{{old('nombreUsers')}}">
                    @error('nombreUsers')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="apellidosUsers" class="form-label">Apellidos Usuario</label>
                    <input type="text" name="apellidosUsers" class="form-control" value="{{old('apellidosUsers')}}">
                    @error('apellidosUsers')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="numeroDocumento" class="form-label">Numero Documento</label>
                    <input type="number" name="numeroDocumento" class="form-control" value="{{old('numeroDocumento')}}">
                    @error('numeroDocumento')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" name="fechaNacimiento" class="form-control" value="{{old('fechaNacimiento')}}">
                    @error('fechaNacimiento')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Usuario</label>
                    <input type="email" name="email" class="form-control" value="{{old('email')}}">
                    @error('email')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tipoDocumento_id" class="form-label">Tipo de Documento</label>
                    <select name="tipoDocumento_id" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach($tipoDocumento as $tipoDoc)
                        <option value="{{$tipoDoc->id}}">{{$tipoDoc->nombreTipoDocumento}}</option>
                        @endforeach
                    </select>
                    @error('tipoDocumento_id')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sexo_id" class="form-label">Genero</label>
                    <select name="sexo_id" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach($sexo as $sexoItem)
                        <option value="{{$sexoItem->id}}">{{$sexoItem->nombreSexo}}</option>
                        @endforeach
                    </select>
                    @error('sexo_id')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control">
                    @error('password_confirmation')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" name="enviar" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
@endsection