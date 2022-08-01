<?php

namespace Tests\Feature;

use App\Models\{
    User,
    Product
};
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EditProductTest extends TestCase
{
    public function test_products_edit_screen_can_be_render()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)
                         ->get('/produtos/'.$product->id.'/edit');

        $response->assertStatus(200);
    }
    
    public function test_products_can_be_edited()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)
                         ->put('/produtos/'.$product->id, [
            'name' => 'Produto Editado',
            'quantity' => '54',
            'cust_price' => '550',
            'sale_price' => '950',
            'photo' => $product->photo,
            'description' => 'Editado',
        ]);

        $response->assertStatus(200);
    }
}