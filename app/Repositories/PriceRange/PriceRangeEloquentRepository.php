<?php

namespace App\Repositories\PriceRange;

use App\Repositories\EloquentRepository;
use App\Repositories\PriceRange\PriceRangeRepositoryInterface;

class PriceRangeEloquentRepository extends EloquentRepository implements PriceRangeRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\PriceRange::class;
	}
}