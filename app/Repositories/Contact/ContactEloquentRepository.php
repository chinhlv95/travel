<?php

namespace App\Repositories\Contact;

use App\Repositories\EloquentRepository;
use App\Repositories\Contact\ContactRepositoryInterface;

class ContactEloquentRepository extends EloquentRepository implements ContactRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Contact::class;
	}
}