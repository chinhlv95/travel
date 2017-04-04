<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Order\OrderRepositoryInterface;

class OrderController extends Controller
{
      protected $OrderRepository;

    public function __construct(OrderRepositoryInterface $OrderRepository)
    {
        $this->OrderRepository = $OrderRepository;
    }
    /**
    *show  list contact
    *@return mixed
    */
    public function getList()
    {
        return view('admin.order.list');
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