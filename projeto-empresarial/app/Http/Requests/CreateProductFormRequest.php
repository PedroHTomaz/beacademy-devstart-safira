<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//por padrao esse return vem false, como um recurso do laravel de trabalahar com acl, autorizacao ...Mais como não irei utilizar esse recurso no momento dev-se alterar para True
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // return [
        //     'name' => [
        //         'required',
        //         'string',
        //         'max:255',
        //         'min:3'
        //     ],
        //     'quantity' => [
        //         'required',
        //     ]

        // ];
    }
}
