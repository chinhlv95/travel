<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
class HomeController extends Controller
{
	protected $catRepository;

    public function __construct(CategoryRepositoryInterface $catRepository)
    {
        $this->catRepository=$catRepository;
    }

	  /*
	  * display home page
	  */
     public function Home()
     {
     	$dataCat=$this->catRepository->getCatPublic();
     	return view("index",[
             'dataCat' =>$dataCat
     		]);
     }
}
