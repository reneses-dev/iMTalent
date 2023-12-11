<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
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
            'title'=>'required',
            'description'=>'required|max:255',
            'url_github'=>'required',
            'user_id' => 'required|exists:users,id',
            'url'=> 'required'
        ];
    }

    //Messages es una palabra reservada de laravel para poder indicar errors custom 
    public function messages(){
        return [
            'title.required' => 'El título del proyecto es obligatorio.',
            'description.required' => 'La descripción del proyecto es obligatoria.',
            'description.max' => 'La descripción no puede superar los 255 carácteres.',
            'url_github.required' => 'La URL de Github es obligatoria.'
        ];
    }
}
