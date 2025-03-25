<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'tb_pais';  
    protected $primaryKey = 'pais_codi';
    protected $fillable = ['pais_nomb', 'pais_capi'];

    public $timestamps = false; 
}
