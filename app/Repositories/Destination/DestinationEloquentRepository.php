<?php

namespace App\Repositories\Destination;

use App\Repositories\EloquentRepository;
use App\Repositories\Destination\DestinationRepositoryInterface;

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

}