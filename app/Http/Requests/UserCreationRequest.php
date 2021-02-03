<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class UserCreationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('isAdmin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => 'required|string',
            "email" => 'required|email|unique:users,email',
            "mobile" => 'required|numeric|min:11',
            "address" => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'type' => [
                'required',
                Rule::in(['customer', 'tailor'])
            ],
            'current_password' => 'required|string|password',
        ];
    }
}