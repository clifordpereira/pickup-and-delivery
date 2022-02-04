<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function test_basic_test()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        // $response->dumpHeaders();

        // $response->dumpSession();

        $response->dump();
    }

}//endof class
