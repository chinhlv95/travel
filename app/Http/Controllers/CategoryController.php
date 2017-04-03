<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    
	protected $cateReposity;

    /**
     * CategoryController constructor
     * @param CategoryRepositoryInterface $cateReposity
     * 
     */
    public function __construct( CategoryRepositoryInterface $cateReposity )
    {
    	$this->cateReposity = $cateReposity;
    }

    /**
    * Get list
    * @return mixed
    */
    public function getList()
    {
    	$cate = $this->cateReposity->getAll();
    	return view('admin.category.list',['cate' => $cate]);
    }

    /**
    * Get Edit
    * @param $id
    * @return mixed
    */
    public function getEdit($id)
    {
    	$cate = $this->cateReposity->find($id);
    	return view('admin.category.edit',['cate' => $cate]);
    }

    /**
    * Post Edit
    * @param CategoryRequest $request
    * @param $id
    * @return mixed
    */
    public function postEdit( CategoryRequest $request, $id )
    {
    	$data = $request->only(['name','meta_key','status']);
    	$this->cateReposity->update($id, $data);
        return Response(['message'=>'Category is edited successfully !']);
    }

    /**
    * Get Add
    * @return mixed
    */
    public function getAdd()
    {
        return view('admin.category.add');
    }

    /**
    * Post Add
    * @param CategoryRequest $request
    * @return mixed
    */
    public function postAdd( CategoryRequest $request)
    {
        $data = $request->only(['name','meta_key','status']);
        $this->cateReposity->create($data);
        return Response(['message'=>'Category is created successfully !']);
    }

    /**
    * Delete
    * @param $id
    * @return mixed
    */
    public function getDelete($id)
    {
    	$this->cateReposity->delete($id);
        return Response(['message'=>'Category is deleted successfully !']);
    }
}
