<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->id ?? '';

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
