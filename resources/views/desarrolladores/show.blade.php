@extends('layouts.main')

@section('titulo', 'Detalle de desarrollador')

@section('content')

    <div class="row my-3">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th class="fw-bold">Nombre</th>
                        <td>{{ $desarrollador->nombre}}</td>
                    </tr>
                    <tr>
                        <th class="fw-bold">Apellido</th>
                        <td>{{ $desarrollador->apellido}}</td>
                    </tr>
                    <tr>
                        <th class="fw-bold">Telefono</th>
                        <td>{{ $desarrollador->telefono}}</td>
                    </tr>
                    <tr>
                        <th class="fw-bold">direccion</th>
                        <td>{{ $desarrollador->direccion}}</td>
                    </tr>
                    <tr>
                        <th class="fw-bold">Proyecto</th>
                        <td>{{ $desarrollador->proyecto}}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('desarrolladores.index') }}" class="btn btn-secondary">Volver</a>
        </div>
        <div class="col-sm-3"></div>        
    </div>

@endsection