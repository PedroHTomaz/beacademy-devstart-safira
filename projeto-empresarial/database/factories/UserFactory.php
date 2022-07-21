<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'tel' => '85 8899 1122',
            'birth_date' => '13/02/2004',
            'cpf' => '01122233355',
            'cep' => '60540660',
            'street' => 'Rua Joao XXIII',
            'number' => '0405',
            'neighborhood' => 'Granja',
            'city' => 'Fortaleza',
            'state' => 'Ceará',
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
