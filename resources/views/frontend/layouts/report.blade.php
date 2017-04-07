@extends('frontend.layouts.masterpage')
@section('title','Report')
@section('description','Report')
@section('keywords','Report')
@section('content')
{{dd(session('addTour'))}}
<section class="report">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mda-box-top">
                    <p class="mda-sub-title-f">CẢM ƠN...</p>
                    <p class="mda-sub-title">Cảm ơn quý khách đã đặt dịch vụ tại Du Lịch Việt.<br/> Quý khách vui lòng đến tại trụ sở công ty Du Lịch Việt để hoàn tất giao dịch!</p>
                    <p class="mda-sub-title-t">H&#195;Y HO&#192;N TẤT THANH TO&#193;N TẠI DU LỊCH VIỆT!</p>
                    <ul class="clearfix">
                        <li>
                            <p class="mda-sub-title">Địa chỉ </p>
                            <div> 175 Nguyễn Thái Bình, Quận 1, Tp.Hồ Chí Minh</div>
                            <div><p>Tel:(+84 8) 7305 6789 - Fax: (+84 8) 3915 2235</p></div>
                        </li>

                        <li>
                            <p class="mda-sub-title">Đơn h&#224;ng</p>
                                <p>M&#227; Booking: <b>1246</b></p>

                                        <p>07/04/2017 09:54</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection