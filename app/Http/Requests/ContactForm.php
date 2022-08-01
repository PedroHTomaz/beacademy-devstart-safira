<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [

            'name' => [
                'min:3',
                'max:25',
                'required',
                'string',
            ],

            'email' => [
                'min:4',
                'max:35',
                'required',
                'string',

            ],
            'tel' => [
                'min:6',
                'max:15',
                'number',
            ]

        ];

        return $rules;
    }
}