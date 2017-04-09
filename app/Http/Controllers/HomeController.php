<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Destination\DestinationRepositoryInterface;
use App\Repositories\Contact\ContactRepositoryInterface;

class HomeController extends Controller
{
	protected $catRepository, $desRepository, $contactRepository;

    public function __construct(CategoryRepositoryInterface $catRepository,DestinationRepositoryInterface $desRepository, ContactRepositoryInterface $contactRepository)
    {
        $this->catRepository=$catRepository;
        $this->desRepository=$desRepository;
        $this->contactRepository=$contactRepository;
    }
	  /*
	  * display home page
	  */
     public function Home()
     {
     	$dataCat  = $this->catRepository->getCatPublic();
        $contacts = $this->contactRepository->getAll();
     	return view("index",[
             'dataCat'      =>$dataCat,
             'desRepository'=>$this->desRepository,
             'contacts'     => $contacts
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
