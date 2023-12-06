<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class MySecondTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_login_user_get_access_to_delete_item()
    {
         // Create a user and log them in
         $user = User::factory()->create();

         $this->actingAs($user);
 
         // Visit the dashboard route
         $response = $this->get(route('deleteFlavor'));
 
         // Assert that the user is redirected to the dashboard
         $response->assertStatus(200);
         $response->assertSee('trying to destroy something?');
    }
}
