<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProfileRequest extends FormRequest
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
            'name' => 'required',
            'surnames' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date_of_birth' => 'required',
            'residence' => 'required',
            'job' => 'required',
            'modality' => 'required',
            'linkedIn' => 'required',
            'presentation' => 'required|min:10',
            'idUser' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El :attribute es obligatorio.',
            'surnames.required' => 'El :attribute es obligatorio.',
            'phone.required' => 'El :attribute es obligatorio.',
            'date_of_birth.required' => 'El :attribute es obligatorio.',
            'residence.required' => 'El :attribute es obligatorio.',
            'job.required' => 'El :attribute es obligatorio.',
            'modality.required' => 'La :attribute es obligatorio.',
            'linkedIn.required' => 'La :attribute es obligatorio.',
            'presentation.required' => 'La :attribute es obligatorio.',
            'presentation.min' => 'La :attribute debe tener mínimo 10 carácteres.'
        ];
    }
}