<?php

namespace App\Repositories\Destination;

interface DestinationRepositoryInterface
{
	public function FilterDestinationname($name= "");
	public function showTourDestination($id,$limit);

}