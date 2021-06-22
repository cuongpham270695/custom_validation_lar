<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormExamRequest extends FormRequest
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
            'name' => 'required|min:2|max:20',
            'age' => 'required|numeric|min:18',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Fill your full name!',
            'name.min' => 'Your name need at least 2 characters',
            'name.max' => 'Your name no more than 20 characters',
            'age.required' => 'Fill your age!',
            'age.min' => 'Age need more than 18',
            'age.numeric' => 'Age must be a number!',
        ];
    }
}
