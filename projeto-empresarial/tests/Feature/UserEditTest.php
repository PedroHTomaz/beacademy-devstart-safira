<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserEditTest extends TestCase
{
    public function test_users_edit_screen_can_be_render()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
                         ->get('/usuarios/'.$user->id.'/edit');
        
        $response->assertStatus(200);
    }
    
    public function test_users_can_be_edited()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
                         ->put('/usuarios/'.$user->id, [
            'name' => 'Usuário Editado',
            'email' => $user->email,
            'password' => 'password',
            'tel' => $user->tel,
            'birth_date' => $user->birth_date,
            'cep' => '01010101',
            'street' => 'Rua da Edição',
            'number' => '0250',
            'neighborhood' => 'Editado',
            'city' => $user->city,
            'state' => $user->state,
        ]);

        $response = $this->get('/usuarios/'.$user->id);
        $response->assertStatus(200);

    }
}
