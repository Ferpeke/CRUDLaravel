@extends('layout/plantilla')

@section('tituloPagina', 'Actualizar una Persona')

@section('contenido')

    <div class="card">
        <div class="card-header">
            <h4 class="display-4 text-center">Actualizar Persona</h4>
        </div>
        <div class="card-body">
            <h6 class="card-title display-6 text-center">Datos de la Persona <i class="fa-solid fa-user-gear"></i></h6>
            <p class="card-text">
                <form action="{{ route('personas.update', $personas->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <label for="">Apellido Paterno</label>
                    <input type="text" name="paterno" id="paterno" class="form-control" required value="{{ $personas->paterno }}">
                    <label for="">Apellido Materno</label>
                    <input type="text" name="materno" id="materno" class="form-control" required value="{{ $personas->materno }}">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required value="{{ $personas->nombre }}">
                    <label for="">fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control w-25" required value="{{ $personas->fecha_nacimiento }}">
                    <div class="mt-3 text-center btn-group">
                        <a class="btn btn-warning btn-md" href="{{ route('personas.index') }}">Regresar <span class="fa-solid fa-person-walking-arrow-loop-left"></span></a>
                        <button class="btn btn-info  btn-md">Actualizar <i class="fa-solid fa-user-pen"></i></button>
                    </div>
                </form>
            </p>
        </div>
    </div>
@endsection