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
    public function getAdd()
    {
    	return view("admin.contact.add");
    }
    /**
    *create contact
    *@param ContactRequest $request
    *@return mixed
    */
    public function postAdd(Request $request)
    {
       if($this->TourerRepository->create($request->all())){
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
       $dataTourerFind=$this->TourerRepository->find($id);
        return view('admin.tourer.edit',[
       'dataTourerFind'=>$dataTourerFind
       ]);
         
     }

    /**
    *delete contect
    *@param Request $request
    *@return mixed
    */
    public function getDelete(Request $request)
    {
       $idTourer=$request->id;
       $tourId=$request->tour_id;
       $orderId=$request->order_id;

       if($this->TourerRepository->delete($idTourer)){
       	  $this->TourRepository->update($tourId,['booked'=>'booked-1']);
       	  $this->OrderRepository->update($orderId,['quantity_tourer'=>'quantity_tourer-1']);
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
