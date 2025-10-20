<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'  => 'required|string|max:100',
            'grado'   => 'required|string|max:20',
            'jornada' => 'required|string|max:20',
            'cupo'    => 'required|integer|min:0',
        ];
    }
}
