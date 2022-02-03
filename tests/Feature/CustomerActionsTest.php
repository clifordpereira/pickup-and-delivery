<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerActionsTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_basic_root_is_working()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_customer_can_create_orders()
    {
        
    }

    public function test_customer_can_see_their_order_status()
    {
        
    }

    public function test_customer_can_see_date_of_pickup()
    {
        
    }

    public function test_customer_can_see_date_of_delivery()
    {
        
    }
}//endof test class
