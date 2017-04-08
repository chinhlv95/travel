@extends('frontend.layouts.masterpage')
@section('title','Checkout')
@section('description','Checkout')
@section('keywords','Checkout')
@section('content')
<section class="checkout">
    <div class="container">
        {{-- Thông tin tuor --}}
        <div class="checkout-title">
            <span class="checkout-title-name">Thông tin tour</span>
        </div>
        <div class="clearfix">
            <div class="info-img">
                <img src="{{$tour->image}}" />
            </div>
            <div class="info-tour">
                <h2> <a href="#">{{$tour->name}}</a>  </h2>
                <div class="tour-row">Thời gian: <span style="font-weight:bold">{{$TourRepository->subDate($tour->start_date,$tour->end_date)}}</span> </div>

                <input type="hidden" id="total-all-hidden" value="0" />
                <div class="tour-row">Giá: <span style="font-weight:bold" id="total-all">{{number_format((int)($tour->price)*(1-(int)($tour->sale)/100), 0 , ",", "." )}} VNĐ</span></div>
                <div class="tour-row">Ngày khởi hành: <span style="font-weight:bold">{{date('d-m-Y', strtotime($tour->start_date))}}</span>
                </div>
                <div class="tour-row">Nơi khởi hành: <span style="font-weight:bold"> {{$tour->provice_name}}</span>
                </div>
                <div class="tour-row">Số chỗ còn nhận: <span style="font-weight:bold">{{((int)($tour->quantity)-(int)($tour->booked))}}</span></div>    
            </div>
        </div>
        <form action="{{URL::to('/')}}/report" method="post" id="checkout">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            {{-- Thông tin liên hệ --}}
            <div class="checkout-title">
                <span class="checkout-title-name">Thông tin liên hệ</span>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="cusName">HỌ TÊN*:<span class="error">
                        @if($errors->has('fullname'))
                            {{$errors->first('fullname')}}
                        @endif
                    </span></label>
                    <input type="text" name="fullname" id="cusName" value="{{old('fullname')}}" class="form-control ">
                </div>
                <div class="form-group col-md-4">
                    <label for="cusEmail">Email*:<span class="error">
                        @if($errors->has('email'))
                            {{$errors->first('email')}}
                        @endif
                    </span></label>
                    <input type="email" name="email" id="cusEmail" value="{{old('email')}}" class="form-control ">
                </div>
                <div class="form-group col-md-4">
                    <label for="cusPhone">Số điện thoại *:<span class="error">
                        @if($errors->has('phone'))
                            {{$errors->first('phone')}}
                        @endif
                    </span></label>
                    <input type="text" name="phone" id="cusPhone" value="{{old('phone')}}" class="form-control">
                </div>
                <p class="clearfix"></p>
                <div class="form-group col-md-4">
                    <label for="cusBirthday">Ngày sinh *:<span class="error">
                        @if($errors->has('birthday'))
                            {{$errors->first('birthday')}}
                        @endif
                    </span></label>
                    <input type="date" name="birthday" id="cusBirthday" value="{{old('birthday')}}" class="form-control ">
                </div>
                <div class="form-group col-md-4">
                    <label for="cusAddress">Địa chỉ *:<span class="error">
                        @if($errors->has('address'))
                            {{$errors->first('address')}}
                        @endif
                    </span></label>
                    <input type="text" name="address" id="cusAddress" value="{{old('address')}}" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="cusGender">Giới tính :<span class="error"></span></label><br>
                    <label class="radio-inline">
                        <input name="gender" value="0" checked {{(old("gender") == 0 ? "checked":"") }} type="radio">Nam
                    </label>
                    <label class="radio-inline">
                        <input name="gender" value="1" {{(old("gender") == 1 ? "checked":"") }} type="radio">Nữ
                    </label>
                </div>
                <p class="clearfix"></p>
                <div class="form-group col-md-4">
                    <label for="cusQuantity">Số lượng :<span class="error cusQuantity"></span></label>
                    <input type="number" id="cusQuantity" name="quantity" class="form-control" data-price="{{(int)(($tour->price)*(1-(int)($tour->sale)/100))}}" value="{{old('quantity',1)}}" min="1" max="{{((int)($tour->quantity)-(int)($tour->booked))}}">
                </div>
                <div class="form-group col-md-4">
                    <label for="cusNote">Ghi chú:<span class="error"></span></label>
                    <textarea name="note" id="cusNote" value="{{old('note')}}" class="form-control "></textarea>
                </div>
            </div>
            <div class="checkout-title">
                <span class="checkout-title-name">Thông tin khách đi tour</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Họ tên(*)</th>
                                <th>Số điện thoại</th>
                                <th>Ngày sinh</th>
                                <th>Giới tính</th>
                                <th>Địa chỉ</th>
                                <th>Giá</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td><input type="text" name="tourer[name][]" 
                                class="form-control "></td>
                                <td><input type="text" name="tourer[phone][]" class="form-control "></td>
                                <td><input type="date" name="tourer[birthday][]" class="form-control "></td>
                                <td><select class="form-control" name="tourer[gender][]">
                                        <option value="0">Nam</option>
                                        <option value="1">Nữ</option>
                                    </select>
                                </td>
                                <td><input type="text" name="tourer[address][]" class="form-control "></td>
                                <td>{{number_format((int)($tour->price)*(1-(int)($tour->sale)/100), 0 , ",", "." )}} VNĐ</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">Tổng giá trị tour:</td>
                                <td id="total_price">{{number_format((int)($tour->price)*(1-(int)($tour->sale)/100), 0 , ",", "." )}} VNĐ</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="checkout-title">
                <span class="checkout-title-name">Hình thức thanh toán</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @foreach( $pays as $pay)
                    <label class="radio-inline">
                        <input name="pay_id" value="{{$pay->id}}"
                        @if($pay->id == 1)
                        {{"checked"}}
                        @endif
                        class="form-group" type="radio">{{$pay->name}}
                    </label>
                    @endforeach
                </div>
            </div>
            <div class="panel-body">
                <div class=" clearfix pull-right submit-btn">
                        <input type="hidden" name="sale" class="form-control" value="{{$tour->sale}}">
                        <input type="hidden" name="quantity_tourer" class="form-control" value="1">
                        <input type="hidden" name="price"  class="form-control" value="{{(int)(($tour->price)*(1-(int)($tour->sale)/100))}}">
                        <input type="hidden" name="tour_id" class="form-control" value="{{$tour->id}}">
                        <input class="btn btn-success " type="submit" value="THANH TOÁN" />
                </div>
            </div>

        </form>

    </div>
</section>
@endsection