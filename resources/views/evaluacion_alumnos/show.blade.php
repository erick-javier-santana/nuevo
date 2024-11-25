@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Evaluación</h1>

        <table class="table table-bordered">
            <tr>
                <th>Clave Alumno</th>
                <td>{{ $evaluacion_alumnos->clave_alumno }}</td>
            </tr>
            <tr>
                <th>Materia</th>
                <td>{{ $evaluacion_alumnos->materia }}</td>
            </tr>
            <tr>
                <th>Calificación</th>
                <td>{{ $evaluacion_alumnos->calificacion }}</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{ $evaluacion_alumnos->fecha }}</td>
            </tr>
        </table>

        <a href="{{ route('evaluacion_alumnos.index') }}" class="btn btn-secondary">Volver</a>
        <a href="{{ route('evaluacion_alumnos.edit', $evaluacion_alumnos->id) }}" class="btn btn-primary">Editar</a>

        <form action="{{ route('evaluacion_alumnos.destroy', $evaluacion_alumnos->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta evaluación?')">Eliminar</button>
        </form>
    </div>
@endsection