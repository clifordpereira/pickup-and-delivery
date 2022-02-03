<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeliveryBoyActionsTest extends TestCase
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

    public function test_delivery_boys_can_see_all_open_orders()
    {
        
    }

    public function test_delivery_boys_can_pick_order()
    {
        
    }

    public function test_delivery_boys_can_deliver_order()
    {
        
    }

    public function test_delivery_boys_can_track_pickup_date()
    {
        
    }

    public function test_delivery_boys_can_track_pickup_time()
    {
        
    }

    public function test_delivery_boys_can_track_delivery_date()
    {
        
    }

    public function test_delivery_boys_can_track_delivery_time()
    {
        
    }

}//endof test class
