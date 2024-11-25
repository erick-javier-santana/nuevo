<?php

namespace App\Http\Controllers;

use App\Models\EvaluacionAlumnos;
use Illuminate\Http\Request;

class EvaluacionAlumnosController extends Controller
{
    // 3.1. Mostrar todos los registros (método index)
    public function index()
    {
        // Obtener todos los registros de evaluaciones de alumnos
        $evaluaciones = EvaluacionAlumnos::all();
        // Pasar los registros a la vista
        return view('evaluacion_alumnos.index', compact('evaluaciones'));
    }

    // 3.2. Mostrar el formulario para crear un nuevo registro (método create)
    public function create()
    {
        // Mostrar el formulario de creación
        return view('evaluacion_alumnos.create');
    }

    // 3.3. Guardar un nuevo registro (método store)
    public function store(Request $request)
    {
        // Validar los datos recibidos del formulario
        $request->validate([
            'clave_alumno' => 'required|integer',
            'materia' => 'required|string|max:255',
            'calificacion' => 'required|numeric|min:0|max:10',
            'fecha' => 'required|date',
        ]);
        // Crear un nuevo registro
        EvaluacionAlumnos::create($request->all());
        // Redirigir a la lista de evaluaciones con un mensaje de éxito
        return redirect()->route('evaluacion_alumnos.index')->with('success', 'Evaluación creada con éxito');
    }

    // 3.4. Mostrar un registro específico (método show)
    public function show( $evaluacion_alumnos)
    {
        // Mostrar una evaluación específica
        return view('evaluacion_alumnos.show', compact('evaluacion_alumno'));
    }

    // 3.5. Mostrar el formulario de edición (método edit)
    public function edit(EvaluacionAlumnos $evaluacion_alumnos)
    {
        // Mostrar el formulario de edición para una evaluación
        return view('evaluacion_alumnos.edit', compact('evaluacion_alumnos'));
    }

    // 3.6. Actualizar un registro existente (método update)
    public function update(Request $request, EvaluacionAlumnos $evaluacion_alumnos)
    {
        // Validar los datos recibidos
        $request->validate([
            'clave_alumno' => 'required|integer',
            'materia' => 'required|string|max:255',
            'calificacion' => 'required|numeric|min:0|max:10',
            'fecha' => 'required|date',
        ]);
        // Actualizar el registro
        $evaluacion_alumnos->update($request->all());
        // Redirigir con un mensaje de éxito
        return redirect()->route('evaluacion_alumnos.index')->with('success', 'Evaluación actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluacionAlumnos $evaluacion_alumnos)
    {
        $evaluacion_alumnos->delete();
        // Redirigir con un mensaje de éxito
        return redirect()->route('evaluacion_alumnos.index')->with('success', 'Evaluación eliminada con éxito');
          }
        }
