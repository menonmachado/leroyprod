<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * Tests if products are listed correctly
     * @return boolean
     */
    public function testIfProductsAreListedCorrectly()
    {
        $response = $this->get('/api/product');

        $response->assertStatus(200);
    }

}
