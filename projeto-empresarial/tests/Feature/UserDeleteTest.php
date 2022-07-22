<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserDeleteTest extends TestCase
{
    public function test_user_delete()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->actingAs($user);

        $response = $this->delete('/usuarios/'.$user->id);

        $response->assertStatus(200);
    }
}
