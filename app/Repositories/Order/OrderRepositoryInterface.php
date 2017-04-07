<?php

namespace App\Repositories\Order;

interface OrderRepositoryInterface
{

	/**
	* InsertGetID
	* @return mixed
	*/
	public function getInsertID( array $attributes);

	public function getInfoOrder($code);


}