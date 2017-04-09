<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Tourer\TourerRepositoryInterface;
use App\Repositories\Tour\TourRepositoryInterface;
use App\Repositories\Order\OrderRepositoryInterface;


class TourersController extends Controller
{
     protected $TourerRepository,$TourRepository,$OrderRepository;

    public function __construct(TourerRepositoryInterface $TourerRepository,TourRepositoryInterface $TourRepository,OrderRepositoryInterface $OrderRepository)
    {
        $this->TourerRepository = $TourerRepository;
        $this->TourRepository   =$TourRepository;
        $this->OrderRepository  =$OrderRepository;
    }

    
    /**
    *display page add contact
    */
    public function getAdd(Request $request)
    {
        $orderId=$request->id;
    	return view("admin.tourer.add",[
           'orderId'=>$orderId
    		]);
    }
    /**
    *create contact
    *@param ContactRequest $request
    *@return mixed
    */
    public function postAdd(Request $request)
    {
       $orderId=$request->order_id;
       $dataOrder=$this->OrderRepository->find($orderId); 
       $tourId=$dataOrder->tour_id;
       $dataTour=$this->TourRepository->find($tourId);
       if($this->TourerRepository->create($request->all())){
       	 // if booked equal 0 ,delete order
       	    $this->TourRepository->update($tourId,['booked'=>(int)($dataTour->booked)+1]);
       	    $this->OrderRepository->update($orderId,['quantity_tourer'=>(int)($dataOrder->quantity_tourer)+1]);
          
       }
    }

    /**
    *display page update
    *@param $id
    *@return mixed
    */ 
     public function getEdit($id)
     {
       $dataTourerFind=$this->TourerRepository->find($id);
        return view('admin.tourer.edit',[
       'dataTourerFind'=>$dataTourerFind
       ]);
         
     }
    /**
    *delete order
    *@param Request $request
    *@return mixed
    */
    public function getDelete(Request $request)
    {
       $idTourer=$request->id;
       $tourId=$request->tour_id;
       $orderId=$request->order_id;
       $dataTour=$this->TourRepository->find($tourId);
       $dataOrder=$this->OrderRepository->find($orderId); 
       if($this->TourerRepository->delete($idTourer)){
       	 // if booked equal 0 ,delete order
            if((int)($dataTour->booked)==0){
             $this->OrderRepository->delete($orderId);
            }
           else{
       	    $this->TourRepository->update($tourId,['booked'=>(int)($dataTour->booked)-1]);
       	    $this->OrderRepository->update($orderId,['quantity_tourer'=>(int)($dataOrder->quantity_tourer)-1]);
          }
       }
    
    }
    /**
    *update user
    *@param UserRequest $request
    *@param integer $id
    *@return mixed
    */
     public function postEdit(Request $request,$id)
     {
     	if($this->TourerRepository->update($id,$request->all())){
          return Response(['message'=>'sửa thành công']);
     	}else{
          return Response(['message'=>'sửa Lỗi']);
     	}
     }

}
