<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "mobile" => 'required|numeric|min:11',
            "address" => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'current_password' => 'required|string|password',
            'avatar' => 'nullable|image|mimes:jpeg,bmp,png,jpg|max:1000',
        ];
    }
}