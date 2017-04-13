<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Destination\DestinationRepositoryInterface;
use App\Repositories\Tour\TourRepositoryInterface;

class HomeController extends Controller
{
	protected $catRepository, $desRepository;

    public function __construct(CategoryRepositoryInterface $catRepository,DestinationRepositoryInterface $desRepository,TourRepositoryInterface $TourRepository)
    {
        $this->catRepository =$catRepository;
        $this->desRepository =$desRepository;
        $this->TourRepository=$TourRepository;
    }
	  /*
	  * display home page
	  */
     public function Home()
     {
     	$dataCat  = $this->catRepository->getCatPublic();
        $dataTourHot=$this->TourRepository->tourHot();
     	return view("index",[
             'dataCat'      =>$dataCat,
             'desRepository'=>$this->desRepository,
             'dataTourHot'  =>$dataTourHot
     		]);
     }
     
}
