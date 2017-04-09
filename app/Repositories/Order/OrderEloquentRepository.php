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
	* InsertGetID
	* @return mixed
	*/
	public function getInsertID( array $attributes)
	{
		$id = $this->_model->insertGetId($attributes);
  		return $id;
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
        ->select('tours.*','orders.*','customers.*','orders.id as order_id')
        ->where(['orders.code'=>$code])
        ->first();
        return $resultInfoOrder;
	}

	/**
	*Process order
	*@return mixed
	*/
	public function processOrder($name,$status)
	{
     $resultOrder = DB::table('orders')
        ->join('customers', 'customers.id', '=', 'orders.customer_id')
        ->join('tours', 'tours.id', '=','orders.tour_id')
        ->join('pays','pays.id','=','orders.pay_id')
        ->select('tours.*','orders.*','customers.*','orders.id as order_id','pays.name as pay_name','tours.id as tour_id')
        ->where('tours.name','like','%'.$name.'%')
        ->where('orders.status','like','%'.$status.'%')
        ->paginate(5);
        return $resultOrder;
	}

	/**
    * get list tourers
    *@param integer $order_id
    *@return mixed
	*/
    public function getListTourer($order_id)
    {
		$resultListTour = DB::table('tourers')
	    ->join('orders', 'orders.id', '=', 'tourers.order_id')
	    ->select('tourers.*')
	    ->where(['tourers.order_id'=>$order_id])
	    ->get();
        return $resultListTour;
    }
}