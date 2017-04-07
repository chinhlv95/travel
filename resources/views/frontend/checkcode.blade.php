@extends('frontend.layouts.masterpage')
@section('title', 'Trang chủ')
@section('content')

<section class="check-code">
<div class="container">
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
							<img src="{{$dataCodeOrder->image}}" alt="$dataCodeOrder->image">
						</div>
					</div>
					<div class="col-md-6">
						<div id="checkout-info-tour">
							<p><span class="first-name-tour">Tour:</span> <span>{{$dataCodeOrder->name}}</span></p>
							<p><span class="first-name-tour">Ngày khởi hành:</span><span>30/04/1995</span></p>
							<p><span class="first-name-tour">Số lượng:</span><span>10(người)</span></p>
							<p><span class="first-name-tour">Giá:</span>9,000,000đ</p>
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
						<p><span class="first-name-tour">Họ tên:</span><span>Trần Chung Kiên</span></p>
						<p><span class="first-name-tour">Email:</span><span>kienkienutc95@gmail.com</span></p>
						<p><span class="first-name-tour">SĐT:</span><span>0964953029</span></p>
						<p><span class="first-name-tour">Ngày sinh:</span><span>08/04/1995</span></p>
						<p><span class="first-name-tour">Giới tính:</span><span>male</span></p>
						<p><span class="first-name-tour">Địa chỉ:</span><span>Hà Nội</span></p>
						<p><span class="first-name-tour">Ghi chú:</span><span>note</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="list-tourers">
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
                          <tr>
                            <td>1</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            
                          </tr>
                           <tr>
                            <td>2</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                          
                          </tr>
                           <tr>
                            <td>3</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            
                          </tr>
                           <tr>
                            <td>4</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                          </tr>
                          <tr>
                            <td colspan="5">
                              Tổng tiền
                            </td>
                            <td>36,000,000đ</td>
                          </tr>
                        </tbody>
                      </table>
	</div>
</div>
</section>
@endsection