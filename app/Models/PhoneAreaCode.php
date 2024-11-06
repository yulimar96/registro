<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneAreaCode extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // Código de área telefónica (solo números, 3 dígitos)
        'code',
        // ID del estado federal al que pertenece el código de área
        'federal_state_id',
    ];

    /**
     * The validation rules for the model.
     *
     * @var array
     */
    protected $rules = [
        // Código de área telefónica debe ser obligatorio, numérico, tener 3 dígitos y ser único en la tabla phone_area_codes
        'code' => 'required|string|digits:3',
    ];

}
