<?php

namespace App\Repositories\Tour;

interface TourRepositoryInterface
{
	public function FilterTourname($name= "", $limit = null, array $with = array());
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

