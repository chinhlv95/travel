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

	/**
    *  display all tour for categories
    * @param integer $id
    * @return mixed
    */
	public function showAllTourCate( $id , $limit )
	{
	      $result = DB::table('tours')
	        ->join('destinations', 'destinations.id', '=', 'tours.destination_id')
	        ->select('tours.*')
	        ->where(['destinations.cate_id'=>$id])
	        ->paginate($limit);
	        return $result;
	}

	/**
    *  Filter by Province
    * @param integer $id
    * @param $limit
    * @return mixed
    */
	public function showAllTourProvince( $id, $limit )
	{
		$result = DB::table('tours')
	        ->where(['province_id' => $id])
	        ->paginate($limit);
	        return $result;
	}

	/**
    *  Filter by Destination
    * @param integer $id
    * @param $limit
    * @return mixed
    */
	public function showAllTourDestination( $id, $limit )
	{
		$result = DB::table('tours')
	        ->where(['destination_id' => $id])
	        ->paginate($limit);
	        return $result;
	}

    /**
    *  display tour for categories
    * @param integer $id
    * @return mixed
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
	/**
	*Tour relationship
	*@param integer $destination_id
	*@param integer $id
	*/
	public function relationTour($destination_id,$id){
		 $result = DB::table('tours')
            ->join('destinations', 'destinations.id', '=', 'tours.destination_id')
            ->join('traffic', 'traffic.id', '=','tours.traffic_id')
            ->join('sales', 'sales.id', '=','tours.sale_id')
            ->join('provinces', 'provinces.id', '=','tours.province_id')
            ->select('tours.*','traffic.name as traffic_name','sales.sale_precent as sale','provinces.name as provice_name')
            ->where(['tours.status'=>1,'destinations.id'=>$destination_id])
            ->where('tours.id','<>',$id)
            ->take(3)
            ->get();
            return $result;
	}
	/**
	*Tour sale
	*@return mixed
	*/
	public function saleTour()
	{
		 $result = DB::table('tours')
            ->join('sales', 'sales.id', '=','tours.sale_id')
            ->select('tours.*','sales.sale_precent as sale')
            ->where('sales.sale_precent','>',0)
            ->orderBy('tours.created_at', 'desc')
            ->take(4)->get();
            return $result;
	}

	/**
	*image Tour
	*@param integer $id
	*@return mixed
	*/
	public function imageTour($id){
		 $result = DB::table('tour_images')
            ->where('tour_id',$id)
            ->get();
            return $result;
	}

	/**
   *filter gobal
   *@param integer $province
   *@param integer $cate
   *@param integer $destination
   *@param date $start
   *@param string $price
   *@return mixed
   */
   public function filterTourGobal($province,$cate,$destination,$start,$price)
   {
   $result;
   	//check $price null
   	if($price!=""){
   		$arrPrice=explode("-",$price);
   		$result = DB::table('destinations')
        ->join('categories', 'categories.id', '=', 'destinations.cate_id')
        ->join('tours', 'tours.destination_id', '=', 'destinations.id')
        ->select('tours.*')
        ->where('tours.province_id','like','%'.$province.'%')
        ->where('destinations.cate_id','like','%'.$cate.'%')
        ->where('tours.destination_id','like','%'.$destination.'%')
        ->where('tours.start_date','like','%'.$start.'%')
        ->whereBetween('tours.price', [(int)$arrPrice[0],(int)$arrPrice[1]])
        ->paginate(10);
   	}else{
        $result = DB::table('destinations')
        ->join('categories', 'categories.id', '=', 'destinations.cate_id')
        ->join('tours', 'tours.destination_id', '=', 'destinations.id')
        ->select('tours.*')
        ->where('tours.province_id','like','%'.$province.'%')
        ->where('destinations.cate_id','like','%'.$cate.'%')
        ->where('tours.destination_id','like','%'.$destination.'%')
        ->where('tours.start_date','like','%'.$start.'%')
        ->paginate(10);
   	}
        return $result;
   }
	
}