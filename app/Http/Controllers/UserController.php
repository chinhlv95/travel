<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequset;
use App\Repositories\User\UserRepositoryInterface;
use Auth;

class UserController extends Controller
{

    protected $postRepository;

    public function __construct(UserRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
    *show  list user
    *@return mixed
    */
    public function getList(Request $r)
    {
      $name=$r->name;
      $dataUser=  $this->postRepository->FilterUsername($name);
    	 return view("admin.user.list",[
             'dataUser'=>$dataUser
            ]);
    }
    /**
    *display page add user
    */
    public function getAdd()
    {
    	return view("admin.user.add");
    }
    /**
    *create user
    *@param UserRequest $request
    *@return mixed
    */
    public function postAdd(UserRequest $request)
    {
        $User=["name"=> $request->name,"email"=>$request->email,"password"=>bcrypt($request->password),"level"=>$request->level];
        if($this->postRepository->create($User)){
            return Response(['message'=>'successfull']);
        }
        else{
            return Response(['message'=>'error insert']);
        }
      
    }

    /**
    *display page update
    *@param $id
    *@return mixed
    */ 
     public function getEdit($id)
     {
       $check=Auth::user()->level;
       $dataUserFind=$this->postRepository->find($id);
       // check user Authentication  is passed
       if(Auth::user()->id!=$id && $check!=1){
            echo 0;
           }
       else{
            return view('admin.user.edit',[
           'dataUserFind'=>$dataUserFind
           ]);
         }
     }

     /**
    *update user
    *@param UserRequest $request
    *@param integer $id
    *@return mixed
    */
     public function postEdit(UserEditRequset $request,$id)
     {
        $check=Auth::user()->level;
        if($check==1){
        $User=["name"=> $request->name,"email"=>$request->email,"level"=>$request->level];
        if($this->postRepository->update($id,$User)){
             return Response(['message'=>'successfull']);
        }
        else{
            return Response(['message'=>'errors']);
        }
       }else{
        $User=["name"=> $request->name,"email"=>$request->email,"password"=>bcrypt($request->password),"level"=>$request->level];
        if($this->postRepository->update($id,$User)){
              return Response(['message'=>'successfull']);
        }
        else{
            return Response(['message'=>'errors']);
        }
       }
      
    }


    /**
    *delete user
    *@param Request $request
    *@return mixed
    */
    public function getDelete(Request $request)
    {
        $check=Auth::user()->level;
        $levelSuperAdmin=$this->postRepository->find($request->id);
        if($check==1&&$levelSuperAdmin->level!=1){
         $this->postRepository->delete($request->id);
              return Response(['message'=>'successfull']);
        }
        else{
            return Response(['message'=>'error insert']);
        }
       
    }
    /**
  *check password old
  *@param string $password
  *@return mixed
  */ 
  public function checkPasswordOld(Request $request){
    $username=$request->username;
    $password=$request->passwordOld;
    if (Auth::attempt(['name' => $username, 'password' => $password])) {
              echo "1";
        }else{
          echo "0";
        }

  }
}
