<?php

namespace App\Repositories\Tourer;

use App\Repositories\EloquentRepository;
use App\Repositories\Tourer\TourerRepositoryInterface;

class TourerEloquentRepository extends EloquentRepository implements TourerRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Tourer::class;
	}
}