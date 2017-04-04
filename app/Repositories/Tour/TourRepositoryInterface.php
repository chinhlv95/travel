<?php

namespace App\Repositories\Tour;

interface TourRepositoryInterface
{
	public function FilterTourname($name= "", $limit = null, array $with = array());
}