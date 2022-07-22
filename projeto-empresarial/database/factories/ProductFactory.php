<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => 'ProductTest',
            'quantity' => '200',
            'cust_price' => '450',
            'sale_price' => '800',
            'photo' => $this->faker->image('storage/app/public/profile',400,300),
            'description' => 'ProductTest OK',
        ];
    }
}
