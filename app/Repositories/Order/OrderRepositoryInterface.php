<?php

namespace App\Repositories\Order;

interface OrderRepositoryInterface
{
	/**
	* InsertGetID
	* @return mixed
	*/
	public function getInsertID( array $attributes);
}