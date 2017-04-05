<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TourRequest;
use App\Repositories\Tour\TourRepositoryInterface;
use App\Repositories\Destination\DestinationRepositoryInterface;
use App\Repositories\Province\ProvinceRepositoryInterface;
use App\Repositories\Sale\SaleRepositoryInterface;
use App\Repositories\Traffic\TrafficRepositoryInterface;
use App\Repositories\TourImage\TourImageRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;

class TourController extends Controller
{
    //
	protected $tourReposity;
	protected $saleReposity;
	protected $provinceReposity;
	protected $TrafficRepository;
	protected $tourimageReposity;
	protected $destiReposity;
	protected $userRepository;

    /**
     * TourController constructor
     * @param TourRepositoryInterface $tourReposity
     * @param SaleRepositoryInterface $saleReposity
     * @param ProvinceRepositoryInterface $provinceReposity
     * @param TrafficRepositoryInterface $TrafficRepository
     * @param DestinationRepositoryInterface $destiReposity
     * @param TourImageRepositoryInterface $tourimageReposity
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct( TourRepositoryInterface $tourReposity, SaleRepositoryInterface $saleReposity, ProvinceRepositoryInterface $provinceReposity, TrafficRepositoryInterface $TrafficRepository, DestinationRepositoryInterface $destiReposity, TourImageRepositoryInterface $tourimageReposity, UserRepositoryInterface $userRepository )
    {
    	$this->tourReposity 	 = $tourReposity;
    	$this->saleReposity 	 = $saleReposity;
    	$this->provinceReposity  = $provinceReposity;
    	$this->TrafficRepository = $TrafficRepository;
    	$this->destiReposity 	 = $destiReposity;
    	$this->tourimageReposity = $tourimageReposity;
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
    	$tour_images = $this->tourimageReposity->FilterTourImage($id, ['tour']);
    	return view('admin.tour.detail',['tour' => $tour, 'tour_images' => $tour_images]);
    }

    /**
    * Get Edit
    * @param $id
    * @return mixed
    */
    public function getEdit($id)
    {
    	$tour       = $this->tourReposity->find($id);
    	$province    = $this->provinceReposity->getAll();
    	$desti       = $this->destiReposity->getAll();
    	$sale        = $this->saleReposity->getAll();
    	$tour_images = $this->tourimageReposity->FilterTourImage($id, ['tour']);
    	$traffic     = $this->TrafficRepository->getAll();
    	return view('admin.tour.edit',['tour' => $tour, 'province' => $province, 'desti' => $desti, 'sale' => $sale, 'tour_images' => $tour_images, 'traffic' => $traffic]);
    }

    /**
    * Post Edit
    * @param TourRequest $request
    * @param $id
    * @return mixed
    */
    public function postEdit( TourRequest $request, $id )
    {
    	$data    = $request->except(['imagepro','image-hidden','_token']);
    	$this->tourReposity->update($id, $data);
    	$images  = $request->only(['imagepro']);
        $image_arr = array();
        for( $i =0 ; $i < count($images['imagepro']) ; $i++) {
        	$image_arr = array('name' => $images['imagepro'][$i], 'tour_id' => $id);
        	$this->tourimageReposity->create($image_arr);
        }
        return redirect()->route('admin.tour.list');
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
    public function postAdd( TourRequest $request)
    {
        $data    = $request->except(['imagepro','image-hidden','_token']);
        $tour_id = $this->tourReposity->getInsertID($data);
        $images  = $request->only(['imagepro']);
        $image_arr = array();
        for( $i =0 ; $i < count($images['imagepro']) ; $i++) {
        	$image_arr = array('name' => $images['imagepro'][$i], 'tour_id' => $tour_id);
        	$this->tourimageReposity->create($image_arr);
        }
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

    /**
    * Delete Image
    * @param $id
    * @return mixed
    */
    public function getDeleteImage($id)
    {
    	$this->tourimageReposity->delete($id);
        return Response(['message'=>'Image is deleted successfully !']);
    }
}
