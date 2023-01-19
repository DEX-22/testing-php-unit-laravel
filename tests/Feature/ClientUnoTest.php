<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertSame;

class ClientUnoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post('/api/clients/get');

        $response->assertStatus(200);
    }

    /**
     * 
     *
     * @test
     */
    public function exam(){

        $exam = "hola";

        assertSame('hola',$exam);

    }
    /**
     * 
     *
     * @test
     */
    public function otro(){

        $exam = "hola";

        assertSame('hola',$exam);

    }
}
