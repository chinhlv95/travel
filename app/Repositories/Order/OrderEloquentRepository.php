<?php

namespace App\Repositories\Order;

use App\Repositories\EloquentRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use DB;

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
    /**
    *Check code order
    *@param string $code
    *@return mixed
    */
	public function getInfoOrder($code)
	{
       $resultInfoOrder = DB::table('orders')
        ->join('customers', 'customers.id', '=', 'orders.customer_id')
        ->join('tours', 'tours.id', '=','orders.tour_id')
        ->select('tours.*','orders.*','customers.*')
        ->where(['orders.code'=>$code])
        ->first();
        return $resultInfoOrder;
	}
}