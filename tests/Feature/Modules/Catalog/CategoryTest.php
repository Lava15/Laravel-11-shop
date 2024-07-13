<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /** @test */
    public function categories_returns_a_successful_response(): void
    {
        $response = $this->get('api/v1/categories');

        $response->assertStatus(200);
    }
}
