@extends('layouts.main')

@section('titulo', 'Detalle de proyecto')

@section('content')
<div class="my-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                <td>{{ $proyecto->nombre}}</td>
                <td>{{ $proyecto->duracion}} meses</td>
                
            </tbody>
        </table>
        <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Volver</a>
    </div>

@endsection