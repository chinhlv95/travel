<?php

namespace App\Repositories\Customer;

use App\Repositories\EloquentRepository;
use App\Repositories\Customer\CustomerRepositoryInterface;

class CustomerEloquentRepository extends EloquentRepository implements CustomerRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Customer::class;
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