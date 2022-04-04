@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')

    <div class="card" id="transparente">
        <div class="card-header">
            <h4 class="display-4 text-center">Elimnar una Persona</h4>
        </div>
        <div class="card-body">
            <h6 class="card-title display-6 text-center">Eliminar Persona <i class="fa-solid fa-user-slash"></i></h6>
            <p class="card-text">
                <div class="alert alert-danger" role="alert">
                    Estas seguro de eliminar esta Persona
                    <div class="table table-responsive table-hover">
                        <table class="table table-sm table-striped text-center">
                            <thead>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Nombre</th>
                                <th>Fecha de Nacimiento</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $personas->paterno }}</td>
                                    <td>{{ $personas->materno }}</td>
                                    <td>{{ $personas->nombre }}</td>
                                    <td>{{ $personas->fecha_nacimiento }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="mt-3 text-center btn-group">
                        <a class="btn btn-warning btn-md" href="{{ route('personas.index') }}">Regresar <span class="fa-solid fa-person-walking-arrow-loop-left"></span></a>
                        <button class="btn btn-danger  btn-md">Eliminar <i class="fa-solid fa-trash-can"></i></button>
                    </div>
                </form>
            </p>
        </div>
    </div>
@endsection