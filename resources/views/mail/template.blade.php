<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cảm ơn quy khách đã đặt tour</title>
</head>
<body>
	<div class="box-left"></div>
    <div class="box-right">
        <p class="sub-title-f" style="color: #999;
		    font-size: 55px;
		    text-align: center;
		    margin-bottom: 15px;">CẢM ƠN...</p>
        <p class="sub-title-a" style="text-align: center;
			line-height: 1.5em;">Cảm ơn quý khách đã đặt dịch vụ tại Việt Sun.<br/> Quý khách vui lòng đến tại trụ sở công ty Việt Sun để hoàn tất giao dịch!</p>
        <p class="sub-title-t" style="color: #ccc;
		    font-size: 20px;
		    text-align: center;
		    margin: 20px 0 10px 0;">HÃY HOÀN TẤT THANH TOÁN TẠI DU LỊCH VIỆT SUN!</p>
        <ul class="clearfix">
            <li style="list-style: none;
		    width: calc(100% / 2);
		    border-right: 1px solid #ccc;
		    float: left;
		    padding: 0 20px;
		    margin: 10px 0;">
                <p style="color: #222;font-size: 17px;padding-bottom: 10px;font-weight: bold;">Địa chỉ </p>
                <div> 175 Nguyễn Thái Bình, Quận 1, Tp.Hồ Chí Minh</div>
                <div><p>Tel:(+84 8) 7305 6789 - Fax: (+84 8) 3915 2235</p></div>
            </li>

            <li style="float: left;width: 35%; list-style: none; padding: 10px 20px;">
                <p style="color: #222;font-size: 17px;padding-bottom: 10px;font-weight: bold;">Đơn hàng</p>
                    <p>Quý khách có thể kiểm tra thông tin tour đã đặt trên <a href="{{URL::to('/')}}" title="">Việt Sun</a> bằng đoạn code sau: <b>{{$data['code']}}</b></p>
            </li>
        </ul>
    </div>
</body>
</html>