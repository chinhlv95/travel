<?php

namespace App\Repositories\Category;

use App\Repositories\EloquentRepository;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\Category::class;
	}
	 public function getCatPublic(){
	   	$result=$this->make(['destination'])->where(['status'=>1])->get();
	   	return  $result;
	   }


}