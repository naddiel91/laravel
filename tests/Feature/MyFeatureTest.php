<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyFeatureTest extends TestCase
{
    public function test_checking_home_page(): void
    {
        $response = $this->get('/store/products');

        $response->assertStatus(200);
        $response->assertSee("My Store");
    }

    public function test_find_record_with_id(): void
    {
        $response = $this->get('/store/product/1');

        $response->assertSee('blackberry');
    }
}
