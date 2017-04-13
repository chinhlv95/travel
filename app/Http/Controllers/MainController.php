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
use App\Repositories\Destination\DestinationRepositoryInterface;
use App\Http\Requests\ReportRequest;
use Mail;
use App\Mail\OrderShipped;


class MainController extends Controller
{
    //
    protected $OrderRepository,$TourRepository,$CategoryRepository,$PayRepository,$SaleRepository,$TourerRepository,$CustomerRepository,$DestiRepository;

    public function __construct(OrderRepositoryInterface $OrderRepository,TourRepositoryInterface $TourRepository, CategoryRepositoryInterface $CategoryRepository, PayRepositoryInterface $PayRepository, SaleRepositoryInterface $SaleRepository, TourerRepositoryInterface $TourerRepository, CustomerRepositoryInterface $CustomerRepository, DestinationRepositoryInterface $DestiRepository)
    {
        $this->OrderRepository   =$OrderRepository;
        $this->TourRepository    =$TourRepository;
        $this->CategoryRepository=$CategoryRepository;
        $this->PayRepository     =$PayRepository;
        $this->SaleRepository    =$SaleRepository;
        $this->TourerRepository  =$TourerRepository;
        $this->CustomerRepository=$CustomerRepository;
        $this->DestiRepository   =$DestiRepository;
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
        $dataTour    =$this->TourRepository->findTour($request->id);
        $dataTourSale=$this->TourRepository->saleTour();
        return view('frontend.tourdetail',[
           'dataTour'      =>$dataTour,
           'TourRepository'=>$this->TourRepository,
           'dataTourSale'  =>$dataTourSale
        ]);    
    }
    /**
    *display page contacts
    */

    /**
    *get categories
    *@param integer $id
    *@return mixde
    */
    public function getContacts()
    {
      return view('frontend.contacts');
    }
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
   *show all tour
   *@return mixed
   */
   public function showTour(){
      $dataTourAll=$this->TourRepository->showAllTour();
      return view('frontend.tours',[
            'dataTourAll'   =>$dataTourAll,
            'TourRepository'=>$this->TourRepository
      ]);
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

      $mail = $request->email;
      $data = ['code' => $order['code']];
      Mail::to($mail)->send(new OrderShipped($data));
      return view('frontend.report', ['code' => $order['code']]);

    }

    /**
    * get tour by destination
    *@param integer $id
    *@return mixed
    */
    public function getTourbyDestination( Request $request)
    {
      $dataDestiTour= $this->TourRepository->showTourDesti($request->id,10);
      $dataDesti=$this->DestiRepository->find($request->id);
      return view('frontend.destitour',[
          'dataDestiTour'       =>$dataDestiTour,
          'TourRepository'     =>$this->TourRepository,
          'dataDesti'            =>$dataDesti
        ]);
    }
 
}
