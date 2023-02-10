<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="nombreSexo" class="col-form-label">Genero</label>
    </div>
    <div class="col-auto">
        <input type="text" name="nombreSexo" id="sexo" class="form-control" 
        value="{{old('sexo',$sexo->nombreSexo)}}">
        @error('nombreSexo')
        <br>
        <small class="alert alert-danger">{{ $message }}</small>
        @enderror
    </div>
</div>