<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Order\OrderRepositoryInterface;

class MainController extends Controller
{
    //
    protected $OrderRepository;

    public function __construct(OrderRepositoryInterface $OrderRepository)
    {
        $this->OrderRepository = $OrderRepository;
    }

    public function checkTour(Request $request)
    {
       $code=$request->check;
       $dataCodeOrder= $this->OrderRepository->find($code);
    	return view('frontend.checkcode',[
              'dataCodeOrder'=>$dataCodeOrder
    		]);
    }

}
