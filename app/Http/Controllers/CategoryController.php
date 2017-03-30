<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    
	protected $cateReposity;

    public function __construct( CategoryRepositoryInterface $cateReposity )
    {
    	$this->cateReposity = $cateReposity;
    }

    public function getList()
    {

    }

    public function getEdit($id)
    {

    }

    public function postEdit(Request $request, $id)
    {

    }

    public function getAdd()
    {

    }

    public function postAdd( Request $request)
    {

    }

    public function getDelete($id)
    {

    }
}
