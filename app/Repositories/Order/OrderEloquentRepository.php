<?php

namespace App\Repositories\Order;

use App\Repositories\EloquentRepository;
use App\Repositories\Order\OrderRepositoryInterface;

class OrderEloquentRepository extends EloquentRepository implements OrderRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Order::class;
	}
}