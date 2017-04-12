<?php

namespace Tests\Controller;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\UserController;

class MyTest extends TestCase
{
    use WithoutMiddleware;

    /**
     * A basic test example.
     *
     * @return void
     */

    public function testVariablesInView()
    {
        $response = $this->get('/tours');

        // $this->assertViewHas('name', 'Lê Anh');
        // $this->assertViewHas('age', 25);
        
        //Hoặc có thể viết như sau
        //Kiểm tra sự tồn tại
        $response->assertViewHasAll(['dataUser']);
        
        //Kiểm tra tồn tại và giá trị của chúng
        // $this->assertViewHasAll(['name' => 'Lê Anh', 'age' => 25]);
    }
}
