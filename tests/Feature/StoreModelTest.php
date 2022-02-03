<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Store;

class StoreModelTest extends TestCase
{
    public function test_store_can_be_persisted()
    {
        $store = Store::factory()->create();
        // Use model in tests...
    }

    public function test_product_can_be_persisted()
    {
        $store = Store::factory()
            ->hasProducts()
            ->create();
    }
}
