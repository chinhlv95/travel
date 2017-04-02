<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PriceRangeRequest;
use App\Repositories\PriceRange\PriceRangeRepositoryInterface;

class PriceRangeController extends Controller
{
    protected $PriceRangeRepository;

    public function __construct(PriceRangeRepositoryInterface $PriceRangeRepository)
    {
        $this->PriceRangeRepository = $PriceRangeRepository;
    }

    /**
    *show  list contact
    *@return mixed
    */
    public function getList()
    {
    	$dataPriceRangeList=$this->PriceRangeRepository->paginate(10);
        return view('admin.price-range.list',[
             'dataPriceRangeList' =>$dataPriceRangeList
        	]);
    }
    
    /**
    *display page add contact
    */
    public function getAdd()
    {
    	return view("admin.price-range.add");
    }
    /**
    *create price range
    *@param PriceRangetRequest $request
    *@return mixed
    */
    public function postAdd(PriceRangeRequest $request)
    {
       if($this->PriceRangeRepository->create($request->all())){
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
       $dataPriceRangeFind=$this->PriceRangeRepository->find($id);
        return view('admin.price-range.edit',[
       'dataPriceRangeFind'=>$dataPriceRangeFind
       ]);
         
     }
     /**
    *update user
    *@param UserRequest $request
    *@param integer $id
    *@return mixed
    */
     public function postEdit(PriceRangeRequest $request,$id)
     {
     	if($this->PriceRangeRepository->update($id,$request->all())){
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
        if($this->PriceRangeRepository->delete($request->id)) {
          return Response(['message'=>'xóa thành công']);
        }else{
          return Response(['message'=>'xóa Lỗi']);
        }

    }
    

}