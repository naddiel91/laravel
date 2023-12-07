<?php

namespace Tests\Feature;

use App\Models\Store;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Database\Factories\UserFactory;

use function PHPUnit\Framework\assertNotSame;

class MySecondTest extends TestCase
{
    private $flavor;

    public function test_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    

    public function atest_login_user_get_access_to_delete_item()
    {
         // Create a user and log them in
         $user = User::factory()->create();
        //  $user = User::find(1);
        //  dd($user);

         // Visiting route as login user
         $response = $this->actingAs($user)->get(route('deleteFlavor', ['id'=>2]));
 
         // Assert that the user is redirected to the dashboard
         $response->assertStatus(200);
         $response->assertSee('trying to destroy something?');
    }

    public function test_view_flavor_details(){
        $this->flavor =  Store::factory()->create([
            'flavor' => 'apple'
        ]);

        $this->get(route('findFlavor', ['id'=>$this->flavor->id]))
            ->assertSee('apple')
            ->assertStatus(200)
            ->assertDontSee('banana');
        
    }
}
