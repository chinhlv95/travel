<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TrafficRequest;
use App\Repositories\Traffic\TrafficRepositoryInterface;

class TrafficController extends Controller
{
    protected $TrafficRepository;

    public function __construct(TrafficRepositoryInterface $TrafficRepository)
    {
        $this->TrafficRepository = $TrafficRepository;
    }
    /**
    *show  list contact
    *@return mixed
    */
    public function getList()
    {
    	$dataTrafficList=$this->TrafficRepository->paginate(10);
        return view('admin.Traffic.list',[
             'dataTrafficList' =>$dataTrafficList
        	]);
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