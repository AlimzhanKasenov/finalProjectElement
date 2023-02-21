<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        //required
        return [
            'title' => 'required|string',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'preview_image' => 'nullable|string',
            'price' => 'nullable|integer',
            'count' => 'nullable|integer',
            'is_published' => 'boolean|string',
            'category_id' => 'nullable|string',
            'tags' => 'nullable|array',
            'colors' => 'nullable|array'
        ];
    }
}
