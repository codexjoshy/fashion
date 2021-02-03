<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
        // dd(request()->method);
        if (request()->method == 'PUT') {
            return [
                "name" => 'required|string|unique:categories,name, ' . $this->user()->id,
                "description" => 'required|string',
                "status" => [
                    'required', Rule::in(['active', 'inactive'])
                ],
                "image" => "nullable|image|mimes:jpeg,bmp,png,jpg,gif|max:1000"
            ];
        }
        return [
            "name" => 'required|string|unique:categories,name',
            "description" => 'required|string',
            "status" => [
                'required', Rule::in(['active', 'inactive'])
            ],
            "image" => "required|image|mimes:jpeg,bmp,png,jpg,gif|max:1000"
        ];
    }
}