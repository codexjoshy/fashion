<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakeOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
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
            "email" => 'required|string|email',
            "phone" => 'required|digits:11',
            "address" => 'required|string',
            "state" => 'required|string',
            "description" => 'sometimes|required|string',
            "with_material" => 'sometimes|required|in:yes,no',
            "attachment" => 'nullable|sometimes|required|json',
            "measurement" => 'nullable|sometimes|required|json',

        ];
    }
}