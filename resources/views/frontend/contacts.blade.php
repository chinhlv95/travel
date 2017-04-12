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
            <div class="row breadcrumb-detail">
                 <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Home</a></li>
                    <li class="active">Liên hệ</li>
                  </ol>
             </div>
            <div class="contact-title">
            	<h3>Liên hệ</h3>
            </div>
            <div class="row">
            	<div class="col-md-6">
            		<div class="contact-left">
            			<p>Quý khách có nhu cầu tư vấn Tour, xin vui lòng liên hệ:</p>
							<p class="company">Công ty Du Lịch Việt Sun</p>
							
								   <p><span><i class="fa fa-map-marker"></i></span><span>240 Lý Chính Thắng, P.9, Q.3, Tp.HCM</span></p>
								 							
                                    <p><span><i class="fa fa-phone"></i></span><span>(08) 3526 2075</span></p>	
								
									<p><span><i class="fa fa-fax"></i></span><span>(08) 3526 2079</span></p>
									
								
							  <p><span>	<i class="fa fa-headphones"></i></span>Hotline 24/7: <span>0909.723.615 – 1800.5555.39</span></p>
									
								
									<p><span><i class="fa fa-envelope"></i></span><span><a href="mailto:kienkienutc95@gmail.com">info@vietsuntravel.com</a></span></p>
									
								
								<p><span>	<i class="fa fa-globe"></i></span><span><a href="{{URL::to('/')}}">travel.com</a></span></p>
									
								
									<p><span><i class="fa fa-facebook"></i></span>									<span><a href="https://www.facebook.com/phuthuy.set" target="_blank">www.facebook.com/travel</a></span></p>
							
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="contact-right">
            			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0566546359955!2d105.78375331431836!3d21.030418993098955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4c71af6657%3A0x99ab1f68fe9d754c!2sCO-WELL+ASIA+Co.%2C+LTD!5e0!3m2!1svi!2s!4v1491991654839" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            		</div>
            	</div>
            </div>
            </div>
</section>
@endsection
