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
        			 <tr>
        				<td>{{$value->id}}</td>
        				<td></td>
        				<td></td>
        				<td></td>
        				<td></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>
        		@endforeach
        		</tbody>
        	</table>
        	<div id="pagination-filter">
        	<?php 
        

        	 ?>
        	{{$dataFilterTour->links()}}
        	</div>
        </div>
	</div>
</section>
@endsection