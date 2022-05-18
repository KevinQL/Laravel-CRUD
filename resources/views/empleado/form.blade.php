    <h1>{{ $modo }} Empleado</h1>
    
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        <label for="Nombre">Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->nombre)? $empleado->nombre : old('Nombre') }}" id="Nombre">
    </div>
    <div class="form-group">
        <label for="ApellidoPaterno">Apellido paterno</label>
        <input type="text" class="form-control" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($empleado->apellidoPaterno)? $empleado->apellidoPaterno : old('ApellidoPaterno') }}">
    </div>
    <div class="form-group">
        <label for="ApellidoMaterno">Apellido materno</label>
        <input type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($empleado->apellidoMaterno)? $empleado->apellidoMaterno : old('ApellidoMaterno') }}">
    </div>
    <div class="form-group">
        <label for="Correo">Correo</label>
        <input type="text" class="form-control" name="Correo" id="Correo" value="{{ isset($empleado->correo)? $empleado->correo : old('Correo') }}">
    </div>

    <div class="form-group">
        <label for="Foto">Foto</label>
        <input type="file" class="form-control" name="Foto" id="Foto" value="">
        @if(isset($empleado->foto))
            <img src="{{ asset('storage').'/'.$empleado->foto }}" class="img-fluid img-thumbnail" width="150px" alt="Foto del empleado">
        @endif
    </div>

    <br>
    
    <input type="submit" class="btn btn-success" value="{{ $modo }} Datos">
    <a href="{{ url('empleado/') }}" class="btn btn-primary">Regresar</a>