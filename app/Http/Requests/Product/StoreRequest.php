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
     * @return array<string, mixed>
     */
    public function rules()
    {
        //required
        return [
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'preview_image' => 'nullable|string',
            'price' => 'nullable|integer',
            'count' => 'nullable|integer',
            'is_published' => 'nullable|string',
            'category_id' => 'nullable|string',
            'tags' => 'nullable|array',
            'colors' => 'nullable|array'
        ];
    }
}
