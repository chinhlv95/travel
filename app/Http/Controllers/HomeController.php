<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;

use App\Repositories\Destination\DestinationRepositoryInterface;

class HomeController extends Controller
{
	protected $catRepository,$desRepository;

    public function __construct(CategoryRepositoryInterface $catRepository,DestinationRepositoryInterface $desRepository)
    {
        $this->catRepository=$catRepository;
        $this->desRepository=$desRepository;
    }
	  /*
	  * display home page
	  */
     public function Home()
     {
     	$dataCat=$this->catRepository->getCatPublic();
     	return view("index",[
             'dataCat' =>$dataCat,
             'desRepository'=>$this->desRepository,
     		]);
     }
     /**
    *show destnation for categories
    *@param integer $id
    *@return mixed;
    */
     public function showDestination(Request $request)
     {
        $dataDestination=  $this->desRepository->showDestinationCate($request->id);
        return json_encode($dataDestination);
     }
}
