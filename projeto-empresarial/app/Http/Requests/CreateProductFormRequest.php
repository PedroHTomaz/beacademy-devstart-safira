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
        $id = $this->id ?? '';
       /*  'unique:product,quantity,{$id}, id' */


         if($this->method('PUT') || $this->method('POST'))
         {
            $rules = [

                'name' => [               
                        'min:3',
                        'max:25',
                        'required',
                        'string',
                    ],
                    'quantity' => [ 
                        'min:1',
                        'max:4',
                        'required',
                    ],
        
                    'sale_price' =>[
                        'required',
                       'min:1',
                       'max:8'
                    ],
        
                    'photo' =>[
                        'required'
                    ],
        
                    'description' => [
                       'required' ,
                    ],
        
                    'cust_price' => [
                        'required',
                        'min:1',
                        'max:8',
                    ],
                ];
        
         }

         return $rules;
    }
}
