<?php

namespace App\Repositories\Post;

use App\Repositories\EloquentRepository;
use App\Repositories\Post\CategoryRepositoryInterface;

class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Post::class;
	}
}