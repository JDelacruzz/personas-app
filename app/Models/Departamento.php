<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = 'tb_departamento'; // Si la tabla no sigue el estándar de nombres de Laravel
    protected $primaryKey = 'depa_codi'; // Si la clave primaria no es 'id'
}

