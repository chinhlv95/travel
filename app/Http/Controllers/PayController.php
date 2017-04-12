<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PayRequest;
use App\Repositories\Pay\PayRepositoryInterface;

class PayController extends Controller
{
    protected $PayRepository;

    public function __construct(PayRepositoryInterface $PayRepository)
    {
        $this->PayRepository = $PayRepository;
    }
    /**
    *show  list contact
    *@return mixed
    */
    public function getList()
    {
    	$dataPayList=$this->PayRepository->paginate(5);
        return view('admin.pay.list',[
             'dataPayList' =>$dataPayList
        	]);
    }
    
    /**
    *display page add contact
    */
    public function getAdd()
    {
    	return view("admin.pay.add");
    }
    /**
    *create price range
    *@param PriceRangetRequest $request
    *@return mixed
    */
    public function postAdd(PayRequest $request)
    {
       if($this->PayRepository->create($request->all())){
       	     return Response(['message'=>'successfull']);
        }
        else{
            return Response(['message'=>'error']);
        }
      
    }

    /**
    *display page update
    *@param $id
    *@return mixed
    */ 
     public function getEdit($id)
     {
       $dataPayFind=$this->PayRepository->find($id);
        return view('admin.pay.edit',[
       'dataPayFind'=>$dataPayFind
       ]);
         
     }
     /**
    *update user
    *@param UserRequest $request
    *@param integer $id
    *@return mixed
    */
     public function postEdit(PayRequest $request,$id)
     {
     	if($this->PayRepository->update($id,$request->all())){
          return Response(['message'=>'successfull']);
        }else{
            return Response(['message'=>'error']);
        }
     }


    /**
    *delete contect
    *@param Request $request
    *@return mixed
    */
    public function getDelete(Request $request)
    {
        if($this->PayRepository->delete($request->id)) {
         return Response(['message'=>'successfull']);
        }else{
            return Response(['message'=>'error']);
        }

    }
    

}
