<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersList extends TestCase
{
    public function tests_users_list_can_be_render()
    {
        $response = $this->get('/usuarios');

        $response->assertStatus(200);
    }
}
