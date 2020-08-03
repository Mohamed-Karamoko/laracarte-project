<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ];
    }

    public function messages()
     {
         return [
            'name.required' => 'Vous devez entrer un nom',
            'email.required' => 'Vous devez entrer un email valide.',
            'message.required' => 'Vous devez entrer un message',
            'name.min' => 'Vous devez entrer un nom minimum :min caracteres.',
            'message.min' => 'Vous devez entrer un message minimum :min caracteres.',
         ];
     }
}
