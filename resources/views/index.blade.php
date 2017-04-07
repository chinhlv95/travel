@extends('frontend.layouts.masterpage')
@section('title','Trang chủ')
@section('description')
{{'Trang chủ'}}
@stop
@section('keywords')
{{'Trang chủ'}}
@stop
@section('content')

<section class="tour">
            <div class="container">
            @foreach ($dataCat as $value)
                <div class="title-tour">
                    <h3><a href="">{{$value->name}}</a></h3>
                </div>
                <div class="tour-content">
                    <ul class="row">
                      @foreach ($desRepository->showTourDestination($value->id,8) as $tour)
                        <li class="col-xs-12 col-sm-6 col-md-3 item">
                            <div class="each-item">
                                <div class="image">
                                    <a href=""><img src="{{$tour->image}}" class="img-responsive" alt=""></a>
                                    <div class="address-tour">
                                        <span><i class="fa fa-map-marker"></i> {{$tour->provice_name}}
                                        
                                        </span>
                                    </div>
                                </div>
                                <div class="info_product">
                                    <h3 class="name_pro"><a href="" title="{{$tour->name}}">
                                      <?php $arrayDescription=explode(' ',$tour->name);
                                         $str="";
                                         $i=0;
                                        foreach($arrayDescription as $key => $value) {
                                         if($i<=10){
                                         $str.=$value." ";    
                                         }
                                         $i++;
                                        }
                                         echo trim($str,' ')."...";
                                         ?>
                                    </a></h3>
                                    <div class="price_pro">
                                        <b>@if($tour->sale>0)
                                         <span class="crossline">{{number_format($tour->price)."đ"}}</span> 
                                           @endif
                                         {{number_format((int)($tour->price)*(1-(int)($tour->sale)/100))."đ"}}				
                                        </b>
                                    </div>
                                    <div class="datetime_pro"><i class="fa fa-calendar"></i> {{$desRepository->subDate($tour->start_date,$tour->end_date)}} | Phương tiện: {!!$tour->traffic_name!!}</div>
                                    <!-- <div class="starttour">KH: </div> -->
                                    <div class="address_pro">
                                        <span><i class="fa fa-calendar-check-o"></i> Khởi hành {{date('d-m-Y', strtotime($tour->start_date))}}</span>
                                    </div>
                                    <div class="addtocartdiv">
                                        <a href="javascript:void(0)" id={{$tour->id}} class="add-tour">Đặt tour</a>
                                        <a href="{{URL::to('/')}}/tour-detail/{{$tour->id}}/{{$desRepository->convert_vi_to_en($tour->name)}}.html" class="tour-detail">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                         @endforeach
                    </ul>
                </div>
                @endforeach
               
            </div>
        </section>
     @endsection