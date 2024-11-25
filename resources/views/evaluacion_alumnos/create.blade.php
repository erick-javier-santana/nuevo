@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Nueva Evaluación</h1>

    <!-- Mostrar errores de validación -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulario para crear una nueva evaluación -->
    <form action="{{ route('evaluacion_alumnos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="clave_alumno" class="form-label">Clave del Alumno</label>
            <input type="number" name="clave_alumno" id="clave_alumno" class="form-control" value="{{ old('clave_alumno') }}" required>
        </div>

        <div class="mb-3">
            <label for="materia" class="form-label">Materia</label>
            <input type="text" name="materia" id="materia" class="form-control" value="{{ old('materia') }}" required>
        </div>

        <div class="mb-3">
            <label for="calificacion" class="form-label">Calificación</label>
            <input type="number" name="calificacion" id="calificacion" class="form-control" value="{{ old('calificacion') }}" min="0" max="10" required>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ old('fecha') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Evaluación</button>
    </form>
</div>
@endsection