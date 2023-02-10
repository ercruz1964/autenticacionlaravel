<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputPassword6" class="col-form-label">Tipo Documento</label>
    </div>
    <div class="col-auto">
        <input type="text" name="nombreTipoDocumento" id="nombreTipoDocumento" class="form-control" 
        value="{{old('nombreTipoDocumento',$tipoDocumento->nombreTipoDocumento)}}">
        @error('nombreTipoDocumento')
        <br>
        <small class="alert alert-danger">{{ $message }}</small>
        @enderror
    </div>
</div>