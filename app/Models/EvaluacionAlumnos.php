<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionAlumnos extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'evaluacion_alumnos';

    public $timestamps = false;

    // Indicar la clave primaria correcta
    protected $primaryKey = 'consecutivo';

    // La clave primaria no es auto-incremental
    public $incrementing = false;

    // Tipo de clave primaria
    protected $keyType = 'int';

    // Los campos que pueden asignarse de forma masiva
    protected $fillable = [
        'periodo',
        'no_de_control',
        'materia',
        'grupo',
        'rfc',
        'clave_area',
        'encuesta',
        'respuestas',
        'resp_abierta',
        'usuario',
        'fecha_hora_evaluacion',
    ];

    // Indicar que las fechas deben ser tratadas como objetos de tipo Carbon
    protected $dates = ['fecha_hora_evaluacion'];
}