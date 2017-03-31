<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    
	protected $cateReposity;

    public function __construct( CategoryRepositoryInterface $cateReposity )
    {
    	$this->cateReposity = $cateReposity;
    }

    public function getList()
    {
    	$cate = DB::table('categories')->get();
    	return view('admin.category.list',['cate'=>$cate]);
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
