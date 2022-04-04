@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')

    <div class="card">
        <div class="card-header">
            <h4 class="display-4 text-center">Agregar nueva Persona</h4>
        </div>
        <div class="card-body">
            <h6 class="card-title display-6 text-center">Datos de la Persona a Agregar <i class="fa-solid fa-address-card"></i></h6>
            <p class="card-text">
                <form action="{{ route('personas.store') }}" method="POST">
                    @csrf
                    <label for="">Apellido Paterno</label>
                    <input type="text" name="paterno" id="paterno" class="form-control" required>
                    <label for="">Apellido Materno</label>
                    <input type="text" name="materno" id="materno" class="form-control" required>
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                    <label for="">fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control w-25" required>
                    <div class="mt-3 text-center btn-group">
                        <a class="btn btn-warning btn-md" href="{{ route('personas.index') }}">Regresar <span class="fa-solid fa-person-walking-arrow-loop-left"></span></a>
                        <button class="btn btn-info  btn-md">Agregar <i class="fa-solid fa-user-plus"></i></button>
                    </div>
                </form>
            </p>
        </div>
    </div>
@endsection