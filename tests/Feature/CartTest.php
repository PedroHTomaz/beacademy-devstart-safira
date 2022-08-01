<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CartTest extends TestCase
{
    public function test_view_cart_can_be_render()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        
        $response = $this->get('/carrinho');

        $response->assertStatus(200);
    }
}
