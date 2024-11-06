<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class CellPhoneAreaCode extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // Código de área telefónica móvil (solo números, 3 dígitos)
        'code',
    ];

    /**
     * Reglas de validación para el modelo.
     *
     * @return array
     */


}
