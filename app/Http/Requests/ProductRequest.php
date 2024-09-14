<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|array',
            'title.az' => 'required|string|max:255',
            'title.en' => 'required|string|max:255',
            'title.ru' => 'required|string|max:255',
            'about' => 'required|array',
            'about.az' => 'required|string|max:255',
            'about.en' => 'required|string|max:255',
            'about.ru' => 'required|string|max:255',

            'status' => 'required|integer',
            'category_id' => 'required|integer',
            'material_id' => 'required|integer',
            'color_id' => 'required|integer',
            'occasion_id' => 'required|integer',
            'price' => 'required|numeric',
            'sale_price' => 'numeric|nullable',
            'market_price' => 'numeric|nullable',
            'designer_id' => 'required|integer',
            'size' => 'numeric',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',

        ];
    }
}
