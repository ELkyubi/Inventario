<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
        'nombre'=>'required|max:255' ,
        'stock'=>'required|numeric',
        'unidades'=>'required|string',
        'foto'=>'nullable',
        'ua_id'=>'required',
        'cat_id'=>'required',
        'fech_ingr'=>'required|date',
        'fech_egr'=>'nullable|date',
        'observacion'=>'nullable|max:255',
        ];
    }
}
