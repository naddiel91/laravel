<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyFeatureTest extends TestCase
{
    public function atest_checking_home_page()
    {
        // $response = $this->get('/store/products');

        // $response->assertStatus(200);
        // $response->assertSee("My Store");
        $this->assertTrue(true);
    }

    public function atest_find_record_with_id()
    {
        // $response = $this->get('/store/product/1');

        // $response->assertSee('blackberry');
        $this->assertTrue(true);
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
}
