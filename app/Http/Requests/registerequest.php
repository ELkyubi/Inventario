<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerequest extends FormRequest
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
                'username' => 'required|unique:users,username',
                'usuario_nombre' => 'required',
                'password' => 'required|min:5',
                'password_confirmation' => 'required|same:password',
        ];
    }
}
