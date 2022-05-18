@extends('layouts.app')

@section('content')
    <div class="container">

        
        @if(Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('mensaje') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a href="{{ url('empleado/create') }}" class="btn btn-success">Crear registro Empleado</a>

        <br>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empleados as $empleado)
                <tr>
                    <td scope="row">{{ $empleado->id }}</td>
                    <td>
                        <img src="{{ asset('storage').'/'.$empleado->foto }}" width="150px" class="img-thumbnail img-fluid" alt="Foto del empleado">
                    </td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellidoPaterno }}</td>
                    <td>{{ $empleado->apellidoMaterno }}</td>
                    <td>{{ $empleado->correo }}</td>
                    <td>
                        
                        <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" class="d-inline">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" onclick="return confirm('Quieres Borrar?')" value="Borrar" class="btn btn-danger">
                        </form>
                        
                        || 

                        <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection