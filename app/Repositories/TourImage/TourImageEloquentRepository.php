<?php

namespace App\Repositories\TourImage;

use App\Repositories\EloquentRepository;
use App\Repositories\TourImage\TourImageRepositoryInterface;

class TourImageEloquentRepository extends EloquentRepository implements TourImageRepositoryInterface
{
	/**
	* get model
	* @return string
	*/
	public function getModel()
	{
		return \App\Models\TourImage::class;
	}

	public function FilterTourImage( $tour_id, array $with = array())
	{
		$tour_images=$this->make($with)->where('tour_id', $tour_id)->get();
  		return $tour_images;
	}
}