<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_404_for_undefined_route(): void
    {
        $response = $this->get('/');
        $response->assertStatus(404);
    }
}
