<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProvinceRequest;
use App\Repositories\Province\ProvinceRepositoryInterface;

class ProvinceController extends Controller
{
    //
    protected $provinceReposity;

    /**
     * ProvinceController constructor
     * @param ProvinceRepositoryInterface $provinceReposity
     * 
     */
    public function __construct( ProvinceRepositoryInterface $provinceReposity )
    {
    	$this->provinceReposity = $provinceReposity;
    }
    /**
    * Get list
    * @return mixed
    */
    public function getList()
    {
    	$provinces = $this->provinceReposity->paginate(10);
    	return view('admin.province.list',['provinces' => $provinces]);
    }

    /**
    * Get Edit
    * @param $id
    * @return mixed
    */
    public function getEdit($id)
    {
    	$province = $this->provinceReposity->find($id);
    	return view('admin.province.edit',['province' => $province]);
    }

    /**
    * Post Edit
    * @param ProvinceRequest $request
    * @param $id
    * @return mixed
    */
    public function postEdit( ProvinceRequest $request, $id )
    {
    	$data = $request->only(['name','status']);
    	$this->provinceReposity->update($id, $data);
        return Response(['message'=>'Province is edited successfully !']);
    }

    /**
    * Get Add
    * @return mixed
    */
    public function getAdd()
    {
        return view('admin.province.add');
    }

    /**
    * Post Add
    * @param ProvinceRequest $request
    * @return mixed
    */
    public function postAdd( ProvinceRequest $request)
    {
        $data = $request->only(['name','status']);
        $this->provinceReposity->create($data);
        return Response(['message'=>'Province is created successfully !']);
    }

    /**
    * Delete
    * @param $id
    * @return mixed
    */
    public function getDelete($id)
    {
    	$this->provinceReposity->delete($id);
        return Response(['message'=>'Province is deleted successfully !']);
    }
}
