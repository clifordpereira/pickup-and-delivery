<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


use App\Models\Customer;
use App\Models\Product;

class OrderModelTest extends TestCase
{
    public function test_order_can_be_persisted()
    {
        $customer = Customer::factory()
            ->forUser()
            ->create();


        $product = Product::factory()
            ->hasAttached($customer, [
                'selling_price' => 10.2,
                'ordered_qty' => 2,
                'ordered_on' => now(),
                'order_status' => 'open',
            ])
            ->create();
    }

}//endof class
