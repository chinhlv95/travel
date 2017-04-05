<?php

namespace App\Repositories\TourImage;

interface TourImageRepositoryInterface
{
 	public function FilterTourImage( $tour_id, array $with = array() );
}