<?php

namespace App\Repositories\Destination;

interface DestinationRepositoryInterface
{

	public function FilterDestinationname($name= "", $limit = null, array $with = array());
	public function showTourDestination($id,$limit);


}