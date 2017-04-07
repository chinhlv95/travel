@extends('frontend.layouts.masterpage')
@section('title','Trang chủ')
@section('description')
{{'Trang chủ'}}
@stop
@section('keywords')
{{'Trang chủ'}}
@stop
@section('content')
<section class="filter-gobal">
	<div class="container">
		<div class="row breadcrumb-detail">
         <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Tìm tour</li>        
          </ol>
        </div>
        <div class="content-search-tour">
        	<table class="table table-bordered table-hover">
        		<thead>
        			<tr>
        				<th>Mã Tour</th>
        				<th>Điểm đến</th>
        				<th>Số Ngày</th>
        				<th>Ngày đi</th>
        				<th>Ngày về</th>
        				<th>Giá</th>
        				<th>Số chỗ còn nhận</th>
        				<th>Book</th>
        			</tr>
        		</thead>
        		<tbody>

        		@foreach ($dataFilterTour as $key => $value)
                     <?php 
                      $dataSaleFilter=$SaleRepository->find($value->sale_id);
                      ?>
        			 <tr>
        				<td>{{$value->id}}</td>
        				<td><a href="{{URL::to('/')}}/tour-detail/{{$value->id}}/{{$SaleRepository->convert_vi_to_en($value->name)}}.html" title="{{$value->name}}">{{$value->name}}</a></td>
        				<td class="date-tour">{{$TourRepository->subDate($value->start_date,$value->end_date)}}</td>
        				<td class="date-tour">{{date('d-m-Y', strtotime($value->start_date))}}</td>
        				<td class="date-tour" >{{date('d-m-Y', strtotime($value->end_date))}}</td>
        				<td> {{number_format((int)($value->price)*(1-(int)($dataSaleFilter->sale_precent)/100))."đ"}} </td>
        				<td>{{((int)($value->quantity)-(int)($value->booked))}}</td>
        				<td>
                         @if(((int)($value->quantity)-(int)($value->booked))==0)
                         <div class="contact">
                             <a href="#">Liên hệ</a>
                         </div>
                         @else
                          <div class="add-tour">
                             <a href="#">Đặt tour</a>
                         </div>
                         @endif            
                        </td>
        			</tr>
        		@endforeach
        		</tbody>
        	</table>
        	<div id="pagination-filter">
               {{$dataFilterTour->links()}}  
        	</div>
        </div>
	</div>
</section>
@endsection