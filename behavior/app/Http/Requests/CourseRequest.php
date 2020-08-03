<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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

    public function messages()
    {
        return [
            'name.required' => 'Por favor , insira o nome do curso',
            'tutor.required' => 'Por favor , insira o nome do tutor',
            'email.required' => 'Por favor, insira um email',
            'email.email' => 'Por favor , insira um email valido.'
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'tutor' => 'required|min:3|max:8',
            'email' => 'required|email',
        ];
    }
}
