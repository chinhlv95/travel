<?php

namespace App\Repositories\Traffic;

use App\Repositories\EloquentRepository;
use App\Repositories\Traffic\TrafficRepositoryInterface;

class TrafficEloquentRepository extends EloquentRepository implements TrafficRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Traffic::class;
	}
}