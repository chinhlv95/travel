<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SaleRequest;
use App\Repositories\Sale\SaleRepositoryInterface;

class SaleController extends Controller
{
    //
    protected $saleReposity;

    /**
     * SaleController constructor
     * @param SaleRepositoryInterface $saleReposity
     * 
     */
    public function __construct( SaleRepositoryInterface $saleReposity )
    {
    	$this->saleReposity = $saleReposity;
    }
    /**
    * Get list
    * @return mixed
    */
    public function getList()
    {
    	$sales = $this->saleReposity->paginate(10);
    	return view('admin.sale.list',['sales' => $sales]);
    }

    /**
    * Get Edit
    * @param $id
    * @return mixed
    */
    public function getEdit($id)
    {
    	$sale = $this->saleReposity->find($id);
    	return view('admin.sale.edit',['sale' => $sale]);
    }

    /**
    * Post Edit
    * @param SaleRequest $request
    * @param $id
    * @return mixed
    */
    public function postEdit( SaleRequest $request, $id )
    {
    	$data = $request->only(['name','sale_precent']);
    	$this->saleReposity->update($id, $data);
        return Response(['message'=>'Sale is edited successfully !']);
    }

    /**
    * Get Add
    * @return mixed
    */
    public function getAdd()
    {
        return view('admin.sale.add');
    }

    /**
    * Post Add
    * @param SaleRequest $request
    * @return mixed
    */
    public function postAdd( SaleRequest $request)
    {
        $data = $request->only(['name','sale_precent']);
        $this->saleReposity->create($data);
        return Response(['message'=>'Sale is created successfully !']);
    }

    /**
    * Delete
    * @param $id
    * @return mixed
    */
    public function getDelete($id)
    {
    	$this->saleReposity->delete($id);
        return Response(['message'=>'Sale is deleted successfully !']);
    }
}
