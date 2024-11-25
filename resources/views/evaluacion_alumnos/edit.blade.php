@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Evaluación</h1>

        <form action="{{ route('evaluacion_alumnos.update', $evaluacion_alumnos->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="clave_alumno">Clave Alumno:</label>
                <input type="number" name="clave_alumno" id="clave_alumno" class="form-control" value="{{ $evaluacion_alumnos->clave_alumno }}" required>
            </div>

            <div class="form-group">
                <label for="materia">Materia:</label>
                <input type="text" name="materia" id="materia" class="form-control" value="{{ $evaluacion_alumnos->materia }}" required>
            </div>

            <div class="form-group">
                <label for="calificacion">Calificación:</label>
                <input type="number" name="calificacion" id="calificacion" class="form-control" value="{{ $evaluacion_alumnos->calificacion }}" step="0.01" min="0" max="10" required>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-control" value="{{ $evaluacion_alumnos->fecha }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('evaluacion_alumnos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection