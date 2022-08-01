<?php

namespace Tests\Feature;

use App\Models\{
    User,
    Product
};
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteProductTest extends TestCase
{
    public function test_products_can_be_delete()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)
                         ->delete('/produtos/'.$product->id);

        $response->assertStatus(200);
    }
}
