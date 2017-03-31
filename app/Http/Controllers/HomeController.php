<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	  /*
	  * display home page
	  */
     public function Home()
     {
     	return view("index");
     }
}
