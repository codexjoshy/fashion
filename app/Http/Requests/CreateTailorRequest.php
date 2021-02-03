<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class CreateTailorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('isTailor') || Gate::allows('isAdmin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (request()->has('bank_name')) {
            return [
                'account_number' => 'required|numeric',
                'account_name' => 'required|string',
                'bank_name' => 'required|string',
            ];
        }
        return [
            'company_name' => 'required|string',
            'description' => 'required|string',
            'tailor_current_password' => 'required|password'
        ];
    }
}