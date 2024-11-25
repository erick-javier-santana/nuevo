@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Evaluaciones</h1>
    
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    
    <a href="{{ route('evaluacion_alumnos.create') }}" class="btn btn-primary mb-3">Crear Nueva Evaluación</a>
    
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Clave Alumno</th>
                <th>Calificación</th>
                <th>Fecha Evaluación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($evaluaciones as $evaluacion)
                <tr>
                    <td>{{ $evaluacion->id }}</td>
                    <td>{{ $evaluacion->clave_alumno }}</td>
                    <td>{{ $evaluacion->calificacion }}</td>
                    <td>{{ $evaluacion->fecha_evaluacion }}</td>
                    <td>
                        <a href="{{ route('evaluaciones.show', $evaluacion->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('evaluaciones.edit', $evaluacion->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('evaluaciones.destroy', $evaluacion->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta evaluación?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay evaluaciones registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection