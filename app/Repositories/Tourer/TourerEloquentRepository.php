<?php

namespace App\Repositories\Tourer;

use App\Repositories\EloquentRepository;
use App\Repositories\Tourer\TourerRepositoryInterface;
use DB;

class TourerEloquentRepository extends EloquentRepository implements TourerRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Tourer::class;
	}
	/**
  *get list tourer for order
  *@param integer $order_id
  *@return mixed
  */
  public function getListTourer($order_id){
  	 $result = DB::table('tourers')
  	 ->where(['order_id'=>$order_id])
  	 ->select('tourers.*')
  	 ->get();
  	 
  	 return $result;
  }
}