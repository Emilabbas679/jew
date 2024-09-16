<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title.az' => 'string|max:255|nullable',
            'title.en' => 'string|max:255|nullable',
            'title.ru' => 'string|max:255|nullable',
            'description' => 'required|array',
            'description.az' => 'string|max:255|nullable',
            'description.en' => 'string|max:255|nullable',
            'description.ru' => 'string|max:255|nullable',
            'status' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ];
    }
}
