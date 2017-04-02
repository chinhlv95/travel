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
    	$cate = $this->cateReposity->getAll();
    	return view('admin.category.list',['cate' => $cate]);
    }

    public function getEdit($id)
    {
    	$cate = $this->cateReposity->find($id);
    	return view('admin.category.edit',['cate' => $cate]);
    }

    public function postEdit( Request $request, $id)
    {
    	$data = $request->only(['name','meta_key','status']);
    	$this->cateReposity->update($id, $data);
    }

    public function getAdd()
    {
        return view('admin.category.add');
    }

    public function postAdd( Request $request)
    {
        $data = $request->only(['name','meta_key','status']);
        $this->cateReposity->create($data);
    }

    public function getDelete($id)
    {
    	$this->cateReposity->delete($id);
    }
}
