<?php

namespace App\Repositories\Pay;

use App\Repositories\EloquentRepository;
use App\Repositories\Pay\PayRepositoryInterface;

class PayEloquentRepository extends EloquentRepository implements PayRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Pay::class;
	}
}