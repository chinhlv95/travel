<?php

namespace App\Repositories\Destination;

use App\Repositories\EloquentRepository;
use App\Repositories\Destination\DestinationRepositoryInterface;
use DB;

class DestinationEloquentRepository extends EloquentRepository implements DestinationRepositoryInterface
{


	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Destination::class;
	}

	public function FilterDestinationname($name= "", $limit = null, array $with = array())
	{
		$desti=$this->make($with)->where('name','like','%'.$name.'%')->paginate($limit);
  		return $desti;
	}

	/**
	*show tour for destination
	*@param integer $id
	*@param integer $limit 
	*/

	public function showTourDestination($id,$limit)
	{
		$result = DB::table('tours')
            ->join('destinations', 'destinations.id', '=', 'tours.destination_id')
            ->join('traffic', 'traffic.id', '=','tours.traffic_id')
            ->join('sales', 'sales.id', '=','tours.sale_id')
            ->join('provinces', 'provinces.id', '=','tours.province_id')
            ->select('tours.*','traffic.name as traffic_name','sales.sale_precent as sale','provinces.name as provice_name')
            ->where(['destinations.cate_id'=>$id,'tours.status'=>1])
            ->take($limit)
            ->get();
            return $result;
	}

    /**
    *show destnation for categories
    *@param integer $id
    *@return mixed;
    */
	 public function showDestinationCate($id){
         	$result = DB::table('destinations')
         	->where(['cate_id'=>$id])
         	->get()
         	->toArray();
         	return $result;
	 }


}