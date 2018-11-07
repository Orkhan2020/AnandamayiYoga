<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSingleLessonForm extends FormRequest
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
            'name' => 'required|unique:lessons',
            'description' => 'required',
            'image' => 'required|image|max:800',
            'is_free' => 'required',
            'category' => 'required',
            'levels' => 'required'
        ];
    }
}
