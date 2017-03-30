<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tour travel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="frontend/assets/plugin/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="frontend/assets/plugin/select/bootstrap-select.min.css">
        <link rel="stylesheet" href="frontend/assets/plugin/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="frontend/assets/plugin/carousel/owl.theme.css">
        <link rel="stylesheet" href="frontend/assets/plugin/carousel/owl.transitions.css">
        <link rel="stylesheet" href="frontend/assets/plugin/carousel/owl.carousel.css">
        <link rel="stylesheet" href="frontend/assets/css/reset.css">
        <link rel="stylesheet" href="frontend/style.css">
        <link rel="stylesheet" href="frontend/assets/css/responsive.css">
    </head>
    <body>
        <header class="header">
            <div class="top-header">
                <div class="container">
                    <div class="left">
                        <ul>
                            <li><a title="Giới thiệu" href="http://vietsuntravel.com/tai-sao-chon-viet-sun-travel-.html">Giới thiệu</a></li>
                            <li><a title="Lịch khởi hành" href="http://vietsuntravel.com/lich-khoi-hanh.html">Lịch khởi hành</a></li>
                            <li><a title="Hình ảnh kỷ niệm đoàn" href="http://vietsuntravel.com/hinh-anh.html">Hình ảnh kỷ niệm đoàn</a></li>
                            <li><a title="Khách hàng thân thiết" href="http://vietsuntravel.com/khach-hang-than-thiet.html">Khách hàng thân thiết</a></li>
                            <li><a title="Chính sách chung" href="http://vietsuntravel.com/chinh-sach-chung.html">Chính sách chung</a></li>
                            <li><a title="Tuyển dụng" href="http://vietsuntravel.com/tuyen-dung.html">Tuyển dụng</a></li>
                        </ul>
                    </div>
                    <div class="right">
                        <ul>
                            <li><a title="Kiểm tra tour đã đặt" href="http://vietsuntravel.com/check-booking.html">Kiểm tra tour đã đặt</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="logo-header">
                <div class="container">
                    <div class="logo">
                        <a href="">
                        <img src="frontend/assets/images/logo.png" alt="">
                        </a>
                        <div class="title-logo maincolor">Tận hưởng giá trị cuộc sống</div>
                    </div>
                    <div class="logo-intro">
                        <p>Tự hào là Nhà Lữ Hành Chuyên Nghiệp</p>
                        <p>Với kinh nghiệm hơn 10 năm tổ chúc các Tour du lịch trong& ngoài nước</p>
                    </div>
                    <div class="time-work">
                        <p>Thời gian làm viêc:</p>
                        T2 - T6: <b>08h00 - 17h30</b> | T7: <b>08h00 - 12h00</b>
                    </div>
                </div>
            </div>
            @include('frontend.layouts.menuMain')
        </header>
        <section class="slideshow">
             @include('frontend.layouts.slideshow')
             @include('frontend.layouts.filter')
        </section>
          @yield('content')
        <footer class="footer">
        	
        </footer>
    </body>
</html>
<script src="frontend/assets/plugin/jquery/jquery-2.1.4.js"></script>
<script src="frontend/assets/plugin/bootstrap/js/bootstrap.min.js" ></script>
<script src="frontend/assets/plugin/select/bootstrap-select.js"></script>
<script src="frontend/assets/plugin/carousel/owl.carousel.min.js"></script>
<script src="frontend/assets/js/main.js"></script>