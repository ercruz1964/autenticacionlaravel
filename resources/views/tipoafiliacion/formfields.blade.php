<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputPassword6" class="col-form-label">Tipo de Afiliacion</label>
    </div>
    <div class="col-auto">
        <input type="text" name="tipoAfiliacion" id="tipoAfiliacion" class="form-control" 
        value="{{old('tipoAfiliacion',$tipoAfiliacion->tipoAfiliacion)}}">
        @error('tipoAfiliacion')
        <br>
        <small class="alert alert-danger">{{ $message }}</small>
        @enderror
    </div>
</div>