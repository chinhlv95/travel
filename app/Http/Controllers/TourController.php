<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TourRequest;
use App\Repositories\Tour\TourRepositoryInterface;
use App\Repositories\Destination\DestinationRepositoryInterface;
use App\Repositories\Province\ProvinceRepositoryInterface;
use App\Repositories\Sale\SaleRepositoryInterface;
use App\Repositories\Traffic\TrafficRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;

class TourController extends Controller
{
    //
	protected $tourReposity;
	protected $saleReposity;
	protected $provinceReposity;
	protected $TrafficRepository;
	protected $destiReposity;
	protected $userRepository;

    /**
     * TourController constructor
     * @param TourRepositoryInterface $tourReposity
     * @param SaleRepositoryInterface $saleReposity
     * @param ProvinceRepositoryInterface $provinceReposity
     * @param TrafficRepositoryInterface $TrafficRepository
     * @param DestinationRepositoryInterface $destiReposity
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct( TourRepositoryInterface $tourReposity, SaleRepositoryInterface $saleReposity, ProvinceRepositoryInterface $provinceReposity, TrafficRepositoryInterface $TrafficRepository, DestinationRepositoryInterface $destiReposity, UserRepositoryInterface $userRepository )
    {
    	$this->tourReposity 	 = $tourReposity;
    	$this->saleReposity 	 = $saleReposity;
    	$this->provinceReposity  = $provinceReposity;
    	$this->TrafficRepository = $TrafficRepository;
    	$this->destiReposity 	 = $destiReposity;
    	$this->userRepository 	 = $userRepository;
    }

    /**
    * Get list
    * @return mixed
    */
    public function getList(Request $request)
    {
    	$name  = $request->name;
    	$tours = $this->tourReposity->FilterTourname($name, 2, ['sale', 'province', 'destination', 'user', 'traffic']);
    	return view('admin.tour.list',['tours' => $tours]);
    }

    /**
    * Get tour detail
    * @param $id
    * @return mixed
    */
    public function getDetail($id)
    {
    	$tour = $this->tourReposity->find($id);
    	return view('admin.tour.detail',['tour' => $tour]);
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
    * @param TourRequest $request
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
    	$province = $this->provinceReposity->getAll();
    	$desti    = $this->destiReposity->getAll();
    	$sale     = $this->saleReposity->getAll();
    	$traffic  = $this->TrafficRepository->getAll();
        return view('admin.tour.add', ['province' => $province, 'desti' => $desti, 'sale' => $sale, 'traffic' => $traffic]);
    }

    /**
    * Post Add
    * @param TourRequest $request
    * @return mixed
    */
    public function postAdd( Request $request)
    {
        $data = $request->only(['name', 'content', 'description', 'note', 'quantity', 'booked', 'image', 'name', 'price', 'meta_key', 'name_seo', 'note', 'tag', 'start_date', 'end_date', 'status', 'is_hot', 'sale_id', 'province_id', 'traffic_id', 'destination_id', 'user_id']);
        $this->tourReposity->create($data);
        return redirect()->route('admin.tour.list');
    }

    /**
    * Delete
    * @param $id
    * @return mixed
    */
    public function getDelete($id)
    {
    	$this->tourReposity->delete($id);
        return Response(['message'=>'Tour is deleted successfully !']);
    }
}
