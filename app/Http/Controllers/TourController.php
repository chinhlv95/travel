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
use App\Repositories\Category\CategoryRepositoryInterface;
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
	protected $cateRepository;
	protected $userRepository;

    /**
     * TourController constructor
     * @param TourRepositoryInterface $tourReposity
     * @param SaleRepositoryInterface $saleReposity
     * @param ProvinceRepositoryInterface $provinceReposity
     * @param TrafficRepositoryInterface $TrafficRepository
     * @param DestinationRepositoryInterface $destiReposity
     * @param TourImageRepositoryInterface $tourimageReposity
     * @param CategoryRepositoryInterface $cateRepository
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct( TourRepositoryInterface $tourReposity, SaleRepositoryInterface $saleReposity, ProvinceRepositoryInterface $provinceReposity, TrafficRepositoryInterface $TrafficRepository, DestinationRepositoryInterface $destiReposity, TourImageRepositoryInterface $tourimageReposity, CategoryRepositoryInterface $cateRepository, UserRepositoryInterface $userRepository )
    {
    	$this->tourReposity 	 = $tourReposity;
    	$this->saleReposity 	 = $saleReposity;
    	$this->provinceReposity  = $provinceReposity;
    	$this->TrafficRepository = $TrafficRepository;
    	$this->destiReposity 	 = $destiReposity;
    	$this->tourimageReposity = $tourimageReposity;
    	$this->cateRepository    = $cateRepository;
    	$this->userRepository 	 = $userRepository;
    }

    /**
    * Get list
    * @return mixed
    */
    public function getList(Request $request)
    {

    	$cates     = $this->cateRepository->getAll();
    	$provinces = $this->provinceReposity->getAll();
    	$destis    = $this->destiReposity->getAll();
    	$name      = $request->name;
    	$tours     = $this->tourReposity->FilterTourname($name, 2, ['sale', 'province', 'destination', 'user', 'traffic']);
    	return view('admin.tour.list',['tours' => $tours, 'cates' => $cates, 'provinces' => $provinces, 'destis' => $destis]);
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
    	$tour        = $this->tourReposity->find($id);
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
    	$name    = $request->name;
    	$this->tourReposity->update($id, $data);
    	$images  = $request->only(['imagepro']);
        $image_arr = array();
        for( $i =0 ; $i < count($images['imagepro']) ; $i++) {
        	$image_arr = array('name' => $images['imagepro'][$i], 'tour_id' => $id);
        	$this->tourimageReposity->create($image_arr);
        }
        $request->session()->flash('message', $name.' is updated!');
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
        $name    = $request->name;
        $tour_id = $this->tourReposity->getInsertID($data);
        $images  = $request->only(['imagepro']);
        $image_arr = array();
        for( $i =0 ; $i < count($images['imagepro']) ; $i++) {
        	$image_arr = array('name' => $images['imagepro'][$i], 'tour_id' => $tour_id);
        	$this->tourimageReposity->create($image_arr);
        }
        return redirect()->route('admin.tour.list')->with('message', $name.' is added successfully!');
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

    /**
    * Filter by Category
    * @param $id
    * @return mixed
    */
    public function getTourCategory($id)
    {
    	$cates     = $this->cateRepository->getAll();
    	$provinces = $this->provinceReposity->getAll();
    	$destis    = $this->destiReposity->getAll();
    	$tours = $this->tourReposity->showAllTourCate( $id , 2 );
    	return view('admin.tour.list',['tours' => $tours, 'cates' => $cates, 'provinces' => $provinces, 'destis' => $destis]);
    }

    /**
    * Filter by Province
    * @param $id
    * @return mixed
    */
    public function getTourProvince($id)
    {
    	$cates     = $this->cateRepository->getAll();
    	$provinces = $this->provinceReposity->getAll();
    	$destis    = $this->destiReposity->getAll();
    	$tours = $this->tourReposity->showAllTourProvince( $id , 2 );
    	return view('admin.tour.list',['tours' => $tours, 'cates' => $cates, 'provinces' => $provinces, 'destis' => $destis]);
    }

    /**
    * Filter by Destination
    * @param $id
    * @return mixed
    */
    public function getTourDestination($id)
    {
    	$cates     = $this->cateRepository->getAll();
    	$provinces = $this->provinceReposity->getAll();
    	$destis    = $this->destiReposity->getAll();
    	$tours = $this->tourReposity->showAllTourDestination( $id , 2 );
    	return view('admin.tour.list',['tours' => $tours, 'cates' => $cates, 'provinces' => $provinces, 'destis' => $destis]);
    }
}
