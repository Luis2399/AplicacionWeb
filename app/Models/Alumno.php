<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table="alumnos";
    protected $primaryKey="id";
    protected $fillable = [
        'id', 'n_control', 'nombre', 'fecha_de_nacimiento', 'semestre_actual', 'carrera', 'especialidad'
        ];
        

        public $timestamps = false;
}