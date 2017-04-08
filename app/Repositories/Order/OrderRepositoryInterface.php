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

	/**
	*Process order
	*@return mixed
	*/
	public function processOrder($name,$status);

	/**
    * get list tourers
    *@param integer $order_id
    *@return mixed
	*/
    public function getListTourer($order_id);


}