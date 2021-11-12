<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGalleryRequest extends FormRequest
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
            "name" => 'required|string|unique:galleries,name,' . $this->gallery->id,
            "description" => 'nullable|string',
            "price" => 'required|numeric',
            "category_id" => 'required|integer|exists:categories,id',
            "status" => 'required|string|in:active,inactive',
            "is_material" => 'required|string|in:yes,no',
            "image" => "sometimes|required|image|mimes:jpeg,bmp,png,jpg,gif|max:1000"
        ];
    }
}