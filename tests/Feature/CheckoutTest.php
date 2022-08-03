<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CheckoutTest extends TestCase
{
    public function test_view_checkout_can_be_render()
    {   
        $response = $this->get('/carrinho/checkout');

        $response->assertStatus(302);
    }
}
