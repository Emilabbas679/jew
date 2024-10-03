<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
            'title.az' => 'required|string',
            'title.en' => 'required|string',
            'title.ru' => 'required|string',
            'description' => 'required|array',
            'description.az' => 'required|string',
            'description.en' => 'required|string',
            'description.ru' => 'required|string',
            'status' => 'required|integer',
        ];
    }
}
