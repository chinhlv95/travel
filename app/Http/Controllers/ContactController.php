<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

use App\Repositories\Contact\ContactRepositoryInterface;

class ContactController extends Controller
{
    
    protected $ContactRepository;

    public function __construct(ContactRepositoryInterface $ContactRepository)
    {
        $this->ContactRepository = $ContactRepository;
    }

    /**
    *show  list contact
    *@return mixed
    */
    public function getList()
    {
    	$dataContactList=$this->ContactRepository->paginate(5);
        return view('admin.contact.list',[
             'dataContactList' =>$dataContactList
        	]);
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
       if($this->ContactRepository->create($request->all())){
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
       $dataContactFind=$this->ContactRepository->find($id);
        return view('admin.contact.edit',[
       'dataContactFind'=>$dataContactFind
       ]);
         
     }

    /**
    *delete contect
    *@param Request $request
    *@return mixed
    */
    public function getDelete(Request $request)
    {
        if($this->ContactRepository->delete($request->id)) {
          return Response(['message'=>'xóa thành công']);
        }else{
          return Response(['message'=>'xóa Lỗi']);
        }

    }
    /**
    *update user
    *@param UserRequest $request
    *@param integer $id
    *@return mixed
    */
     public function postEdit(ContactRequest $request,$id)
     {
     	if($this->ContactRepository->update($id,$request->all())){
          return Response(['message'=>'sửa thành công']);
     	}else{
          return Response(['message'=>'sửa Lỗi']);
     	}
     }


}
