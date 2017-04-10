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
         return Response(['message'=>'thành công']);
        }
    }
    
    /**
    *display page add contact
    */
    public function getAdd()
    {
    	return view("admin.Traffic.add");
    }
    /**
    *create price range
    *@param PriceRangetRequest $request
    *@return mixed
    */
    public function postAdd(TrafficRequest $request)
    {
       if($this->TrafficRepository->create($request->all())){
       	   return Response(['message'=>'thành công']);
        }
    }

    /**
    *display page update
    *@param $id
    *@return mixed
    */ 
     public function getEdit($id)
     {
       $dataTrafficFind=$this->TrafficRepository->find($id);
        return view('admin.Traffic.edit',[
       'dataTrafficFind'=>$dataTrafficFind
       ]);
         
     }
     /**
    *update user
    *@param UserRequest $request
    *@param integer $id
    *@return mixed
    */
     public function postEdit(TrafficRequest $request,$id)
     {
     	if($this->TrafficRepository->update($id,$request->all())){
          return Response(['message'=>'sửa thành công']);
     	}else{
          return Response(['message'=>'sửa Lỗi']);
     	}
     }


    /**
    *delete contect
    *@param Request $request
    *@return mixed
    */
    public function getDelete(Request $request)
    {
        if($this->TrafficRepository->delete($request->id)) {
          return Response(['message'=>'xóa thành công']);
        }else{
          return Response(['message'=>'xóa Lỗi']);
        }

    }
    
}
