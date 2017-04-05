<?php

namespace App\Repositories\Tour;

interface TourRepositoryInterface
{
	/**
	* get tour
	* @param $name
	* @param $limit
	* @param array $with
	* @return mixed
	*/
	public function FilterTourname($name= "", $limit = null, array $with = array());


	/**
	* InsertGetID
	* @return mixed
	*/
	public function getInsertID( array $attributes);


     /**
     * display tour for categories
     *@param integer $id
     *@return mixed
     */
	public function showTourCate($id,$limit);
	/**
    *find tour
    *@param  integer $id;
    *@return mixed
	*/
	public function  findTour($id);

}


