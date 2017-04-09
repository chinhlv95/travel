<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DestinationRequest;
use App\Repositories\Destination\DestinationRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;

class DestinationController extends Controller
{
    //
    protected $destiReposity;
    protected $cateReposity;

    /**
     * DestinationController constructor
     * @param DestinationRepositoryInterface $destiReposity
     * 
     */
    public function __construct( DestinationRepositoryInterface $destiReposity, CategoryRepositoryInterface $cateReposity )
    {
    	$this->destiReposity = $destiReposity;
    	$this->cateReposity  = $cateReposity;
    }

    /**
    * Get list
    * @return mixed
    */
    public function getList( Request $request )
    {
    	$name = $request->name;
    	$desti = $this->destiReposity->FilterDestinationname( $name,5,['category']);
    	return view('admin.destination.list',['desti' => $desti]);
    }

    /**
    * Get Edit
    * @param $id
    * @return mixed
    */
    public function getEdit($id)
    {
    	$desti = $this->destiReposity->find($id);
    	$cate  = $this->cateReposity->getAll();
    	return view('admin.destination.edit',['desti' => $desti, 'cate' => $cate]);
    }

    /**
    * Post Edit
    * @param DestinationRequest $request
    * @param $id
    * @return mixed
    */
    public function postEdit( DestinationRequest $request, $id )
    {
    	$data = $request->only(['name','status','cate_id']);
    	$this->destiReposity->update($id, $data);
        return Response(['message'=>'Destination is edited successfully !']);
    }

    /**
    * Get Add
    * @return mixed
    */
    public function getAdd()
    {
    	$cate = $this->cateReposity->getAll();
        return view('admin.destination.add',['cate' => $cate]);
    }

    /**
    * Post Add
    * @param DestinationRequest $request
    * @return mixed
    */
    public function postAdd( DestinationRequest $request)
    {
        $data = $request->only(['name','status','cate_id']);
        $this->destiReposity->create($data);
        return Response(['message'=>'Destination is created successfully !']);
    }

    /**
    * Delete
    * @param $id
    * @return mixed
    */
    public function getDelete($id)
    {
    	$this->destiReposity->delete($id);
        return Response(['message'=>'Destination is deleted successfully !']);
    }
}
