<?php

namespace App\Repositories\User;

use App\Repositories\EloquentRepository;
use App\Repositories\User\UserRepositoryInterface;

class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\User::class;
	}

  public function FilterUsername($name="")
  {
  	$dataUser=$this->_model->where('name','like','%'.$name.'%')->paginate(10);
  	return $dataUser;
  }
}