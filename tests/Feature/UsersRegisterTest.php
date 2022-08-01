<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersRegisterTest extends TestCase
{
    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '12345678',
            'password_confirmation' => '12345678',
            'tel' => '8588991122',
            'birth_date' => '13/02/2004',
            'cpf' => '01122210013',
            'cep' => '60540535',
            'street' => 'Rua Joao XXIII',
            'number' => '0001',
            'neighborhood' => 'Granja Lisboa',
            'city' => 'Fortaleza',
            'state' => 'Ceará',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::CATALOGO);
    }

    public function test_new_users_admin_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '12345678',
            'password_confirmation' => '12345678',
            'tel' => '8588991122',
            'birth_date' => '13/02/2004',
            'cpf' => '01122210013',
            'cep' => '60540535',
            'street' => 'Rua Joao XXIII',
            'number' => '0001',
            'neighborhood' => 'Granja Lisboa',
            'city' => 'Fortaleza',
            'state' => 'Ceará',
            'is_admin' => 1,
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::CATALOGO);
    }
}
