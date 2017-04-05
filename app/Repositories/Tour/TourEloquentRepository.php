<?php

namespace App\Repositories\Tour;

use App\Repositories\EloquentRepository;
use App\Repositories\Tour\TourRepositoryInterface;

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
}