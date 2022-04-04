@extends('layout/plantilla')

@section('tituloPagina', 'CRUD con laravel 8')

@section('contenido')

    <div class="card">
        <div class="card-header">
            <h3 class="display-3 text-center">CRUD con laravel 8 y MySQL</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </symbol>
                        </svg>
                        <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                <use xlink:href="#check-circle-fill" />
                            </svg>
                            <div>
                                {{ $mensaje }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <h6 class="card-title display-6 text-center">Listado de Personas en el Sistema <i
                    class="fa-solid fa-address-book"></i></h6>
            <p>
                <a class="btn btn-primary" href="{{ route('personas.create') }}">
                    Agregar nueva Persona
                    <span class="fa-solid fa-user-plus"></span>
                </a>
            </p>
            <hr>
            {{-- @php
                print_r($datos);
            @endphp --}}
            <p class="card-text">
                {{-- Creamos una tabla --}}
            <div class="table table-responsive">
                <table class="table table-sm table-striped text-center">
                    <thead>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->paterno }}</td>
                                <td>{{ $item->materno }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->fecha_nacimiento }}</td>
                                <td>
                                    <form action="{{ route('personas.edit', $item->id) }}" method="GET">
                                        <button class="btn btn-warning btn-sm"><span
                                                class="fa-solid fa-pen-to-square"></span></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('personas.show', $item->id) }}" method="GET">
                                        <button class="btn btn-danger btn-sm"><span
                                                class="fa-solid fa-trash"></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{ $datos->links() }}
                </div>
            </div>
            </p>
        </div>
    </div>
@endsection
