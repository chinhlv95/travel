<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\Sale\SaleRepositoryInterface;
use App\Repositories\Tour\TourRepositoryInterface;

class OrderController extends Controller
{
      protected $OrderRepository,$SaleRepository,$TourRepository;

    public function __construct(OrderRepositoryInterface $OrderRepository,SaleRepositoryInterface $SaleRepository,TourRepositoryInterface $TourRepository)
    {
        $this->OrderRepository =$OrderRepository;
        $this->SaleRepository  =$SaleRepository;
        $this->TourRepository  =$TourRepository;
    }
    /**
    *show  list contact
    *@return mixed
    */
    public function getList(Request $r)
    {   $name  =isset($r->name)?$r->name:"";
        $status=isset($r->status)?$r->status:"";
        $dataOrder=$this->OrderRepository->processOrder($name,$status);
        return view('admin.order.list',[
             'dataOrder'      =>$dataOrder,
             'SaleRepository' =>$this->SaleRepository,
             'OrderRepository'=>$this->OrderRepository
            ]);
    }
    /**
    * update status order
    *@param request $r 
    */
    public function updateOrderStatus(Request $r)
    {
        $id      =$r->id;
        $quantity=$r->quantity;
        $tourId  =$r->tourId;
        $updateTourorder=$this->TourRepository->find($tourId);
        if($this->OrderRepository->update($id,['status'=>1])){
            $this->TourRepository->update($tourId,['booked'=>(int)($updateTourorder->booked)+$quantity]);
         return Response(['message'=>'successfull']);
        }
    }
    
   
    
}
