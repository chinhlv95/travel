<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\Tour\TourRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Pay\PayRepositoryInterface;
use App\Repositories\Sale\SaleRepositoryInterface;
use App\Repositories\Tourer\TourerRepositoryInterface;
use App\Repositories\Customer\CustomerRepositoryInterface;
use App\Http\Requests\ReportRequest;


class MainController extends Controller
{
    //
    protected $OrderRepository,$TourRepository,$CategoryRepository,$PayRepository,$SaleRepository,$TourerRepository,$CustomerRepository;

    public function __construct(OrderRepositoryInterface $OrderRepository,TourRepositoryInterface $TourRepository, CategoryRepositoryInterface $CategoryRepository, PayRepositoryInterface $PayRepository, SaleRepositoryInterface $SaleRepository, TourerRepositoryInterface $TourerRepository, CustomerRepositoryInterface $CustomerRepository )
    {
        $this->OrderRepository   =$OrderRepository;
        $this->TourRepository    =$TourRepository;
        $this->CategoryRepository=$CategoryRepository;
        $this->PayRepository     =$PayRepository;
        $this->SaleRepository    =$SaleRepository;
        $this->TourerRepository  =$TourerRepository;
        $this->CustomerRepository=$CustomerRepository;
    }
    
    /**
    *check code tour
    *@param request $request
    *@return mixed
    */ 
    public function checkTour(Request $request)
    {
       $code          =$request->check;
       $dataCodeOrder = $this->OrderRepository->getInfoOrder($code);
       // check empty
       if(!empty($dataCodeOrder)){
       $dataSale      =$this->SaleRepository->find($dataCodeOrder->sale_id);
       $dataTourerList=$this->TourerRepository->getListTourer($dataCodeOrder->order_id);
    	return view('frontend.checkcode',[
              'dataCodeOrder' =>$dataCodeOrder,
              'dataSale'      =>$dataSale,
              'dataTourerList'=>$dataTourerList
    		]);
      }else{
            return view('frontend.checkcode',[
              'dataCodeOrder' =>$dataCodeOrder,
              ]);
      }

    }
    /**
    *display detail page
    *@param integer $id
    *@return mixed
    */ 
    public function getTourDetail(Request $request)
    {  
        $dataTour=$this->TourRepository->findTour($request->id);
        $dataTourSale=$this->TourRepository->saleTour();
       return view('frontend.tourdetail',[
           'dataTour'      =>$dataTour,
           'TourRepository'=>$this->TourRepository,
           'dataTourSale'  =>$dataTourSale
        ]);    
    }

    /**
    *get categories
    *@param integer $id
    *@return mixde
    */
    public function getCategories(Request $request)
    {
     $dataCateTour= $this->TourRepository->showTourCate($request->id,10);
     $dataCat=$this->CategoryRepository->find($request->id);
     return view('frontend.catetour',[
          'dataCateTour'       =>$dataCateTour,
          'TourRepository'     =>$this->TourRepository,
          'dataCat'            =>$dataCat
        ]);
    }

    /**
    *Filter gobal
    *@param Request $request
    *@return mixed
    */
    public function filterGobal(Request $request)
    {
      $dataFilterTour=$this->TourRepository->filterTourGobal($request->province,$request->cate,$request->destination,$request->start,$request->price);
      return view('frontend.filtergobal',[
        'dataFilterTour'=>$dataFilterTour,
        'TourRepository'=>$this->TourRepository,
        'SaleRepository'      =>$this->SaleRepository
        ]);
    }

    /**
    * Checkout
    * @param Request $request
    * @return mixed
    */
    public function getCheckout(Request $request)
    {
      $dataTour=$this->TourRepository->findTour($request->id);
      $pays     = $this->PayRepository->getAll();
      return view('frontend.checkout', ['tour' => $dataTour, 'TourRepository'=>$this->TourRepository, 'pays' => $pays]);
    }

    /**
    * Report
    * @param ReportRequest $request
    * @return mixed
    */
    public function postReport(ReportRequest $request)
    {
      $customer    = $request->only(['fullname', 'email', 'phone', 'birthday', 'gender', 'address', 'note']);
      $customer_id = $this->CustomerRepository->getInsertID($customer);
      $order       = $request->only(['sale','quantity_tourer','price','tour_id','pay_id']);
      $order['customer_id'] = $customer_id;
      $order['code']   = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"), 0, 6);
      $order["status"] = 0;
      $order_id        = $this->OrderRepository->getInsertID($order);
      $tourers         = $request->only(['tourer']);
      for( $i = 0; $i< count($tourers['tourer']['name']); $i++) {
        $tourer['fullname'] = $tourers['tourer']['name'][$i];
        $tourer['birthday'] = $tourers['tourer']['birthday'][$i];
        $tourer['phone']    = $tourers['tourer']['phone'][$i];
        $tourer['gender']   = $tourers['tourer']['gender'][$i];
        $tourer['address']  = $tourers['tourer']['address'][$i];
        $tourer['order_id'] = $order_id;
        $this->TourerRepository->create($tourer);
      }
      return view('frontend.report', ['code' => $order['code']]);

    }

}
