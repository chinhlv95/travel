<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\LoginRequest;
use Auth;

class LoginController extends Controller
{
    /**
    * process login page
    *@param LoginRequest $request
    *@return mixed
    */
    public function postLogin(LoginRequest $request)
    {
       $username=$request->username;
       $password=$request->password;
       session('username',  $username);
       session('password',  $password);
        if (Auth::attempt(['name' => $username, 'password' => $password])) {
              return redirect('admin/user/list');
        }
        else{
         return redirect('/backend')->with("message","lỗi đăng nhập");
        }
    }
    /**
    *Process logout user
    */
    public function Logout()
    {
    	Auth::logout();
    	return redirect('backend');
    }
}
