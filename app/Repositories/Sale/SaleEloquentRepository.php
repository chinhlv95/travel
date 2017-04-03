<?php

namespace App\Repositories\Sale;

use App\Repositories\EloquentRepository;
use App\Repositories\Sale\SaleRepositoryInterface;

class SaleEloquentRepository extends EloquentRepository implements SaleRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Sale::class;
	}
}