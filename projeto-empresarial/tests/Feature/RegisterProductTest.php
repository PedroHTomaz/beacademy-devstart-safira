<?php

namespace Tests\Feature;

use App\Models\{
    User,
    Product
};
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterProductTest extends TestCase
{
    public function test_product_register_screen_can_be_render()
    {
        $user = User::factory()->create();
        
        $response = $this->actingAs($user)
                         ->get('/produtos/novo');

        $response->assertStatus(200);
    }

    public function test_products_can_be_register()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();
        
        $response = $this->actingAs($user)
                         ->post('/produtos/novo', [
            'name' => $product->name,
            'quantity' => $product->quantity,
            'cust_price' => '450',
            'sale_price' => '800',
            'photo' => $product->photo,
            'description' => $product->description,
        ]);

        $response->assertStatus(200);
    }
}
