<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'datos_formulario';
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'mensaje',
	'updated_at',
	'created_at'       
    ];
}
