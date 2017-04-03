<?php

namespace App\Repositories\Province;

use App\Repositories\EloquentRepository;
use App\Repositories\Province\ProvinceRepositoryInterface;

class ProvinceEloquentRepository extends EloquentRepository implements ProvinceRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Province::class;
	}
}