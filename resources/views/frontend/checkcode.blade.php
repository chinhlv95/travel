@extends('frontend.layouts.masterpage')
@section('title', 'Trang chủ')
@section('content')

<section class="check-code">
  <div class="container">
    @if(empty($dataCodeOrder))
    <div class="row breadcrumb-detail">
     <ol class="breadcrumb">
      <li><a href="{{URL::to('/')}}">Home</a></li>
      <li class="active">Kiểm tra tour</li>        
    </ol>
  </div>
  {{"Mã đặt tour không tồn tại !"}}
  <div id="fix-height"></div>
  @else
  <div class="row breadcrumb-detail">
   <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Kiểm tra tour</li>        
  </ol>
</div>
<div class="tour-sale-title">
 <h2><a href="">THÔNG TIN TOUR ĐÃ ĐẶT</a></h2>
 <p class="tour-sale-line"></p>
</div>
<div class="info-order">
  <div class="row">
   <div class="col-md-6">
    <div class="info-order-tour" >
      <div class="info-tour-title">
        <h4>Thông tin tour</h4>
      </div>
      <div class="row">
       <div class="col-md-6">
        <div id="checkout-image-tour">
         <img src="{{$dataCodeOrder->image}}" alt="{{$dataCodeOrder->image}}">
       </div>
     </div>
     <div class="col-md-6">
      <div id="checkout-info-tour">
       <p><span class="first-name-tour">Tour:</span> <span>{{$dataCodeOrder->name}}</span></p>
       <p><span class="first-name-tour">Ngày khởi hành:</span><span>{{date('d-m-Y', strtotime($dataCodeOrder->start_date))}}</span></p>
       <p><span class="first-name-tour">Số lượng:</span><span>{{$dataCodeOrder->booked}}(người)</span></p>
       <p><span class="first-name-tour">Giá:</span>{{number_format((int)($dataCodeOrder->price)*(1-(int)($dataSale->sale_precent)/100))."đ"}}  </p>
     </div>
   </div>
 </div>
</div>
</div>
<div class="col-md-6">
  <div class="info-order-customer">
    <div class="info-tour-title">
      <h4>Thông tin người đặt tour</h4>
    </div>
    <div id="info-order-customer-checkout">
      <p><span class="first-name-tour">Họ tên:</span><span>{{$dataCodeOrder->fullname}}</span></p>
      <p><span class="first-name-tour">Email:</span><span>{{$dataCodeOrder->email}}</span></p>
      <p><span class="first-name-tour">SĐT:</span><span>{{$dataCodeOrder->phone}}</span></p>
      <p><span class="first-name-tour">Ngày sinh:</span><span>{{date('d-m-Y', strtotime($dataCodeOrder->birthday))}}</span></p>
      <p><span class="first-name-tour">Giới tính:</span><span>{{($dataCodeOrder->gender)?"Nam":"Nữ"}}</span></p>
      <p><span class="first-name-tour">Địa chỉ:</span><span>{{$dataCodeOrder->address}}</span></p>
      <p><span class="first-name-tour">Ghi chú:</span><span>{{$dataCodeOrder->note}}</span></p>
    </div>
  </div>
</div>
</div>
</div>
<div class="list-tourers">
  <div class="info-tour-title-list">
    <h4>Danh sách người trong tour</h4>
  </div>
  <table class="table table-striped table-bordered ">
    <thead>
      <th class="header-list-tourer"></th>
      <th class="header-list-tourer">Họ Tên</th>
      <th class="header-list-tourer">Ngày sinh</th>
      <th class="header-list-tourer">Giới tính</th>
      <th class="header-list-tourer">Điện thoại</th>
      <th class="header-list-tourer">Địa chỉ</th>
    </thead>
    <tbody>
      <?php $i=1; 
      $total=0;
      ?>
      @foreach($dataTourerList as $key => $value)
      <tr>
        <td>{{$i}}</td>
        <td>{{$value->fullname}}</td>
        <td>{{date('d-m-Y', strtotime($value->birthday))}}</td>
        <td>{{($value->gender)?"Nam":"Nữ"}}</td>
        <td>{{$value->phone}}</td>
        <td>{{$value->address}}</td>
        
      </tr>
      <?php 
      $total+=(int)($dataCodeOrder->price)*(1-(int)($dataSale->sale_precent)/100);
      $i++; ?>
      @endforeach
      
      
      <tr>
        <td colspan="5">
          Tổng tiền
        </td>
        <td>{{ $total."đ"}}</td>
      </tr>
    </tbody>
  </table>
</div>
@endif
</div>
</section>
@endsection