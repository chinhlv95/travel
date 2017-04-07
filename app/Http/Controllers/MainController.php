<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\Tour\TourRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Pay\PayRepositoryInterface;


class MainController extends Controller
{
    //
    protected $OrderRepository,$TourRepository,$CategoryRepository;

    public function __construct(OrderRepositoryInterface $OrderRepository,TourRepositoryInterface $TourRepository,CategoryRepositoryInterface $CategoryRepository, PayRepositoryInterface $PayRepository )
    {
        $this->OrderRepository = $OrderRepository;
        $this->TourRepository=$TourRepository;
        $this->CategoryRepository=$CategoryRepository;
        $this->PayRepository=$PayRepository;
     
    }

    /**
    *check code tour
    *@param request $request
    *@return mixed
    */ 
    public function checkTour(Request $request)
    {
       $code=$request->check;
       $dataCodeOrder= $this->OrderRepository->find($code);
    	return view('frontend.checkcode',[
              'dataCodeOrder'=>$dataCodeOrder
    		]);
    }
    /**
    *display detail page
    *@param integer $id
    *@return mixed
    */ 
    public function getTourDetail(Request $request)
    {  
        $dataTour=$this->TourRepository->findTour($request->id);
        $dataTourSale=$this->TourRepository->saleTour();
       return view('frontend.tourdetail',[
           'dataTour'      =>$dataTour,
           'TourRepository'=>$this->TourRepository,
           'dataTourSale'  =>$dataTourSale
        ]);    
    }

    /**
    *get categories
    *@param integer $id
    *@return mixde
    */
    public function getCategories(Request $request)
    {
     $dataCateTour= $this->TourRepository->showTourCate($request->id,10);
     $dataCat=$this->CategoryRepository->find($request->id);
     return view('frontend.catetour',[
          'dataCateTour'       =>$dataCateTour,
          'TourRepository'     =>$this->TourRepository,
          'dataCat'            =>$dataCat
        ]);
    }

    public function getCheckout(Request $request)
    {
      $dataTour=$this->TourRepository->findTour($request->id);
      $pays     = $this->PayRepository->getAll();
      return view('frontend.checkout', ['tour' => $dataTour, 'TourRepository'=>$this->TourRepository, 'pays' => $pays]);
    }

}
