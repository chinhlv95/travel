<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Repositories\EloquentRepository;

class MyTest extends PHPUnit_Framework_TestCase
{
	private $repository;

	protected function set()
    {
    	$this->repository = new EloquentRepository();
    }

    /**
     * A basic test example.
     *
     * @return void
     */

    public function testExample()
    {
    	$result = $this->repository->test();
        $this->assertEquals( 2, $result);
    }
}