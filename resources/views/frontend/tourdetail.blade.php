@extends('frontend.layouts.masterpage')
@section('title')
{{$dataTour->name}}
@stop
@section('description')
{{$dataTour->name}}
@stop
@section('keywords')
{{$TourRepository->convert_vi_to_en($dataTour->name)}}
@stop
@section('content')

<section class="detail-tour">
         <div class="container">
             <div class="row breadcrumb-detail">
                 <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tour</a></li>
                    <li class="active">Vacation</li>        
                  </ol>
             </div>
        
         <div class="tour-content">
             <div class="row">
                 <div class="col-md-5">
                     <div class="image-top">
                         <img id="img-first-detail" src="{{asset('frontend/assets/images/detail1.jpg')}}" alt="">
                     </div>
                     <div class="tour-detail-img owl-theme">
                     <div class="slide">
                       <img   class="img-slide-detail"src="{{asset('frontend/assets/images/detail2.jpg')}}" alt="">
                     </div>
                    <div class="slide">
                            <img  class="img-slide-detail" src="{{asset('frontend/assets/images/detail3.jpg')}}" alt="">
                     </div> 
                      <div class="slide">
                       <img  class="img-slide-detail" src="{{asset('frontend/assets/images/detail4.jpg')}}" alt="">
                     </div>
                    <div class="slide">
                            <img  class="img-slide-detail" src="{{asset('frontend/assets/images/detail2.jpg')}}" alt="">
                     </div>   
                     <div class="slide">
                            <img   class="img-slide-detail"src="{{asset('frontend/assets/images/detail1.jpg')}}" alt="">
                     </div>                           
                     </div>
                 </div>
                 <div class="col-md-7">
                     <div class="right-tour-detail">
                         <h1>{{$dataTour->name}}</h1>

                         <h3>Hành trình: Hà Nội – Đầm Vân Long – Chùa Bái Đính – Tràng An – Hạ Long</h3>
                         <div class="socail-fb">
                            
                         </div>
                         <div class="sapo-tour">
                            <?php $arrayDescription=explode(' ',$dataTour->description );
                             $str="";
                             $i=0;
                            foreach($arrayDescription as $key => $value) {
                             if($i<=90){
                             $str.=$value." ";    
                             }
                             $i++;
                            }
                             echo trim($str,' ')."...";
                             ?>
                            
                         </div>
                         <div class="add-tour">
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="add-tour-left">
                                         <span>Khởi hành:<a href="">{{$dataTour->provice_name}}</a></span>
                                         <p>Thời gian:{{$TourRepository->subDate($dataTour->start_date,$dataTour->end_date)}}</p>
                                         <p>Thời gian khởi hành:{{date('d-m-Y', strtotime($dataTour->start_date))}}</p>
                                         <p>Còn:10 chỗ</p>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="add-tour-right">
                                     @if($dataTour->sale>0)

                                         <p><span id="money-unline">{{number_format($dataTour->price)."đ"}}</span></p>
                                         <p><span>Giá từ:</span><span id="tour-money">
                                              {{number_format((int)($dataTour->price)*(1-(int)($dataTour->sale)/100))."đ"}}     
                                         </span></p>
                                         @else
                                            <p><span>Giá từ:</span><span id="tour-money">11,499,000đ</span></p>
                                         @endif
                                         <div class="add-tour-order">
                                             <a href="#" title="">Đặt tour</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="description-tour">
             <div class="row">
                 <div class="col-md-8">
                     <div class="description-tour-left">
                         <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home">Tổng quan</a></li>
                          <li><a data-toggle="tab" href="#menu1">Lịch trình</a></li>
                          <li><a data-toggle="tab" href="#menu2">Lịch khởi hành</a></li>
                          <li><a data-toggle="tab" href="#menu3">Bình luận</a></li>
                        </ul>

                        <div class="tab-content">
                          <div id="home" class="tab-pane fade in active">
                    
                            <p>Some content.</p>
                          </div>
                          <div id="menu1" class="tab-pane fade">
                          
                            <p>Some content in menu 1.</p>
                          </div>
                          <div id="menu2" class="tab-pane fade">
                          
                            <p>Some content in menu 2.</p>
                          </div>
                          <div id="menu3" class="tab-pane fade">
                          
                            <p>Some content in menu 3.</p>
                          </div>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="description-tour-right">
                         <div class="title-tour-relation">
                             <h3><i class="fa fa-filter"></i> Tour liên quan</h3>
                         </div>
                         <div class="list-tour-relation">
                             <ul>
                                 <li>
                                     <a href="#">
                                         <div class="box-relation">
                                             <div class="box-relation-img">
                                                 <img src="{{asset('frontend/assets/images/relation1.jpg')}}" alt="">
                                             </div>
                                             <div class="box-relation-info">
                                                 <p>Du Lịch Sin - Mal - Indo 6 ngày 5 đêm giá tốt khởi hành từ TP.HCM</p>
                                                 <p>
                                                     <span class="start-tour">Khởi hành: 20/04/2017 </span>
                                                     <span class="discount">9,999,000</span>
                                                 </p>
                                             </div>
                                         </div>
                                     </a>
                                   
                                 </li>
                                  <li>
                                     <a href="#">
                                         <div class="box-relation">
                                             <div class="box-relation-img">
                                                 <img src="{{asset('frontend/assets/images/relation2.jpg')}}" alt="">
                                             </div>
                                             <div class="box-relation-info">
                                                 <p>Du Lịch Sin - Mal - Indo 6 ngày 5 đêm giá tốt khởi hành từ TP.HCM</p>
                                                 <p>
                                                     <span class="start-tour">Khởi hành: 20/04/2017 </span>
                                                     <span class="discount">9,999,000</span>
                                                 </p>
                                             </div>
                                         </div>
                                     </a>
                                   
                                 </li>
                                  <li>
                                     <a href="#">
                                         <div class="box-relation">
                                             <div class="box-relation-img">
                                                 <img src="{{asset('frontend/assets/images/relation3.jpg')}}" alt="">
                                             </div>
                                             <div class="box-relation-info">
                                                 <p>Du Lịch Sin - Mal - Indo 6 ngày 5 đêm giá tốt khởi hành từ TP.HCM</p>
                                                 <p>
                                                     <span class="start-tour">Khởi hành: 20/04/2017 </span>
                                                     <span class="discount">9,999,000</span>
                                                 </p>
                                             </div>
                                         </div>
                                     </a>
                                   
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="tour-sale">
             <div class="tour-sale-title">
                 <h2><a href="">Tour giảm giá</a></h2>
                 <p class="tour-sale-line"></p>
             </div>
             <ul class="row">
                 <li class="col-md-3"><a href="">
                     <div class="box-sale">
                         <img src="{{asset('frontend/assets/images/sale1.jpg')}}" alt="">
                          <div class="box-sale-info">
                          <p><a href="">Du lịch Quy Nhơn - Tuy Hoà khám phá biển hè 4 ngày giá tốt từ Hà Nội</a></p>
                         <p>
                             <span>Giá từ:</span>
                             <span class="price-sale">6,290,000đ </span>
                             <span class="price-not-sale">6,590,000đ</span>
                         </p>
                     </div>
                     </div>
                 </a></li>
                 <li class="col-md-3"><a href="">
                     <div class="box-sale">
                         <img src="{{asset('frontend/assets/images/sale2.jpg')}}" alt="">
                          <div class="box-sale-info">
                           <p><a href="">Du lịch Quy Nhơn - Tuy Hoà khám phá biển hè 4 ngày giá tốt từ Hà Nội</a></p>
                         <p>
                             <span>Giá từ:</span>
                             <span class="price-sale">6,290,000đ </span>
                             <span class="price-not-sale">6,590,000đ</span>
                         </p>
                     </div>
                     </div>
                 </a></li>
                 <li class="col-md-3"><a href="">
                     <div class="box-sale">
                         <img src="{{asset('frontend/assets/images/sale3.jpg')}}" alt="">
                          <div class="box-sale-info">
                           <p><a href="">Du lịch Quy Nhơn - Tuy Hoà khám phá biển hè 4 ngày giá tốt từ Hà Nội</a></p>
                         <p>
                             <span>Giá từ:</span>
                             <span class="price-sale">6,290,000đ </span>
                             <span class="price-not-sale">6,590,000đ</span>
                         </p>
                     </div>
                     </div>


                 </a></li>
                 <li class="col-md-3"><a href="">
                     <div class="box-sale">
                         <img src="{{asset('frontend/assets/images/sale.jpg')}}" alt="">
                          <div class="box-sale-info">
                           <p><a href="">Du lịch Quy Nhơn - Tuy Hoà khám phá biển hè 4 ngày giá tốt từ Hà Nội</a></p>
                         <p>
                             <span>Giá từ:</span>
                             <span class="price-sale">6,290,000đ </span>
                             <span class="price-not-sale">6,590,000đ</span>
                         </p>
                     </div>
                     </div>
                    
                 </a></li>
             </ul>
         </div>
          </div>
        </section>
@endsection