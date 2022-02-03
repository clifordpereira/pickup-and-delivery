<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\Customer;

class UserModelTest extends TestCase
{
    public function test_user_can_be_instantiated()
    {
        $user = User::factory()->make();

        // Use model in tests...
    }

    public function test_user_can_be_persisted()
    {
        $user = User::factory()->create([
            'name' => 'Cliford Pereira',
        ]);
        // Use model in tests...
    }

    public function test_customer_can_be_persisted()
    {
        $user = User::factory()
            ->hasCustomer()
            ->create();
    }

}//endof class
