<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Models\Federal_states;
use App\Models\Municipalities;
use App\Models\Parishes;
use App\Models\CellPhoneAreaCode;
use App\Models\PhoneAreaCode;

/**
 * Modelo para la tabla persons
 */
class Person extends Model
{
    /**
     * Campos que se pueden asignar masivamente
     *
     * @var array
     */
    protected $fillable = [
        'name_1',
        'name_2',
        'surname_1',
        'surname_2',
        'birth_date',
        'sex',
        'nationality',
        'id_number',
        'federal_state_id',
        'municipality_id',
        'parish_id',
        'address',
        'phone_area_code_id',
        'phone',
        'cell_phone_area_code_id',
        'cell_phone',
        'email',
        'institution',
        'years_experience',
    ];

    /**
     * Reglas de validación para los campos
     *
     * @var array
     */
    protected $rules = [
        'name_1' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',
        'name_2' => 'nullable|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',
        'surname_1' => 'required|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',
        'surname_2' => 'nullable|string|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',
        'id_number' => 'required|string|regex:/^[0-9]{7,8}$/',
        'birth_date' => 'required|date',
        'sex' => 'required|boolean',
        'nationality' => 'required|boolean',
        'federal_state_id' => 'required|exists:federal_states,id',
        'municipality_id' => 'required|exists:municipalities,id',
        'parish_id' => 'required|exists:parishes,id',
        'address' => 'required|string',
        'phone_area_code_id' => 'required|exists:phone_area_codes,id',
        'phone' => 'required|string',
        'cell_phone_area_code_id' => 'required|exists:cell_phone_area_codes,id',
        'cell_phone' => 'required|string',
        'email' => 'required|string|email',
        'institution' => 'required|string',
        'years_experience' => 'required|numeric',
    ];

    /**
     * Campos que se agregan dinámicamente
     *
     * @var array
     */
    protected $appends = ['age'];

    /**
     * Calcula la edad de la persona basado en la fecha de nacimiento
     *
     * @return int
     */
    public function getAgeAttribute()
    {
        $birthDate = $this->birth_date;
        $today = Carbon::today();
        $age = $today->diffInYears($birthDate);
        return $age;
    }

    /**
     * Relación con la tabla federal_states
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function federalState()
    {
        return $this->belongsTo(Federal_states::class);
    }

    /**
     * Relación con la tabla municipalities
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipality()
    {
        return $this->belongsTo(Municipalities::class);
    }

    /**
     * Relación con la tabla parishes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parish()
    {
        return $this->belongsTo(Parishes::class);
    }

    /**
     * Relación con la tabla phone_area_codes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function phoneAreaCode()
    {
        return $this->belongsTo(PhoneAreaCode::class);
    }

    /**
     * Relación con la tabla cell_phone_area_codes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cellPhoneAreaCode()
    {
        return $this->belongsTo(CellPhoneAreaCode::class);
    }

}
