<?php

namespace App\Repositories\Tour;

use App\Repositories\EloquentRepository;
use App\Repositories\Tour\TourRepositoryInterface;
use DB;

class TourEloquentRepository extends EloquentRepository implements TourRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Tour::class;
	}

	/**
	* get tour
	* @param $name
	* @param $limit
	* @param array $with
	* @return mixed
	*/
	public function FilterTourname($name= "", $limit = null, array $with = array())
	{
		$desti=$this->make($with)->where('name','like','%'.$name.'%')->paginate($limit);
  		return $desti;
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

     /* display tour for categories
     *@param integer $id
     *@return mixed
     */
	public function showTourCate($id,$limit)
	{
          $result = DB::table('tours')
            ->join('destinations', 'destinations.id', '=', 'tours.destination_id')
            ->join('traffic', 'traffic.id', '=','tours.traffic_id')
            ->join('sales', 'sales.id', '=','tours.sale_id')
            ->join('provinces', 'provinces.id', '=','tours.province_id')
            ->select('tours.*','traffic.name as traffic_name','sales.sale_precent as sale','provinces.name as provice_name')
            ->where(['destinations.cate_id'=>$id,'tours.status'=>1])
            ->paginate($limit);
            return $result;
	}
	/**
    * find tour
    *@param $id
    *@return mixed
	*/
	public function  findTour($id)
	{
		  $result = DB::table('tours')
            ->join('destinations', 'destinations.id', '=', 'tours.destination_id')
            ->join('traffic', 'traffic.id', '=','tours.traffic_id')
            ->join('sales', 'sales.id', '=','tours.sale_id')
            ->join('provinces', 'provinces.id', '=','tours.province_id')
            ->select('tours.*','traffic.name as traffic_name','sales.sale_precent as sale','provinces.name as provice_name')
            ->where(['tours.id'=>$id,'tours.status'=>1])->first();
            return $result;
	}
	

}