<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Customer;

class CustomerModelTest extends TestCase
{    

    public function test_customer_can_be_persisted()
    {
        // $customer = Customer::factory()->create();
        // Use model in tests...
    }
}
