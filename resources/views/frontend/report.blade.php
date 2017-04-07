@extends('frontend.layouts.masterpage')
@section('title','Report')
@section('description','Report')
@section('keywords','Report')
@section('content')
<section class="report">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box-left"></div>
                <div class="box-right">
                    <p class="sub-title-f">CẢM ƠN...</p>
                    <p class="sub-title-a">Cảm ơn quý khách đã đặt dịch vụ tại Việt Sun.<br/> Quý khách vui lòng đến tại trụ sở công ty Việt Sun để hoàn tất giao dịch!</p>
                    <p class="sub-title-t">HÃY HOÀN TẤT THANH TOÁN TẠI DU LỊCH VIỆT SUN!</p>
                    <ul class="clearfix">
                        <li>
                            <p class="sub-title">Địa chỉ </p>
                            <div> 175 Nguyễn Thái Bình, Quận 1, Tp.Hồ Chí Minh</div>
                            <div><p>Tel:(+84 8) 7305 6789 - Fax: (+84 8) 3915 2235</p></div>
                        </li>

                        <li>
                            <p class="sub-title">Đơn h&#224;ng</p>
                                <p>M&#227; Booking: <b>{{$code}}</b></p>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <a href="{{URL::to('/')}}" class="continue">TIẾP TỤC</a>

            </div>
        </div>
    </div>
</section>
@endsection