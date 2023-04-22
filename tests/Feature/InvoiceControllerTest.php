<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InvoiceControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_controller_returns_a_successful_response()
    {
        $response = $this->get('api/invoices');

        $response->assertStatus(302);
    }
}