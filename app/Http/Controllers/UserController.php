<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
    *show  list user
    *@return mixed
    */
    public function getList()
    {  
    	return view("admin.user.list");
    }
    /**
    *display page add user
    */
    public function getAdd()
    {
    	return view("admin.user.add");
    }


}
