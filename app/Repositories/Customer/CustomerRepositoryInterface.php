<?php

namespace App\Repositories\Customer;

interface CustomerRepositoryInterface
{
	/**
	* InsertGetID
	* @return mixed
	*/
	public function getInsertID( array $attributes);
}