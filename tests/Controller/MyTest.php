<?php

namespace Tests\Controller;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\UserController;
use App\Models\User;

class MyTest extends TestCase
{
    use WithoutMiddleware;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testVariablesGetAdd()
    {
        $response = $this->call('GET', 'admin/user/list');
        $response->assertViewHasAll(['dataUser']);
    }
}
