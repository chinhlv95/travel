<?php

namespace App\Repositories\Order;

interface OrderRepositoryInterface
{

	/**
	* InsertGetID
	* @return mixed
	*/
	public function getInsertID( array $attributes);
   /**
   *check order
   *@param string $code
   *@return mixed
   */
	public function getInfoOrder($code);

}