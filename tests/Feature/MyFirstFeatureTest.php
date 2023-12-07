<?php

namespace Tests\Feature;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyFirstFeatureTest extends TestCase
{
    public function test_checking_home_page()
    {
        $response = $this->get('/store/products');

        $response->assertStatus(200);
        $response->assertSee("My Store");
    }

    public function atest_find_record_with_id()
    {
        $response = $this->get('/store/product/1');

        $response->assertSee('blackberry');
    }

    public function test_pagination()
    {
        //fruits are unique, mango is on page 1 only

        //page 1
        $response = $this->get('/store/products?page=1');
        // $response = $this->get('/store/products');
        $response->assertSee("mango");

        //page 2        
        $response = $this->get('/store/products?page=2');
        $response->assertDontSee("mango");
    }

    public function test_authenticated_user_can_delete_items()
    {
        // Create a user and log them in
        $user = User::fake()->create();

        // ddd($user);

        $this->actingAs($user);

        // Visit the dashboard route
        $response = $this->get(route('deleteFlavor'));

        // Assert that the user is redirected to the dashboard
        $response->assertStatus(200);
        $response->assertSee('trying to destroy something?');
        
        // Add more assertions as needed
    }

    public function test_home_page() {
        $response = $this->get(route('/'));

        $response->assertStatus(200);
    }
}
