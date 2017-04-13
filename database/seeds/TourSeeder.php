<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tours')->insert([
        	['name' => 'Du Lịch Miền Bắc - Khám phá Đảo Đầu Lâu - Trang An dịp lễ', 'content' => '<div class="mda-title">
<div class="mda-title"><span style="font-size: 12pt;"><strong>TP.HCM &ndash; H&Agrave; NỘI (Ăn trưa, chiều)</strong></span></div>
<div class="mda-title">&nbsp;</div>
<div class="mda-day">
<div><em>S&aacute;ng:</em></div>
<div>&nbsp;</div>
<div style="padding-left: 30px;">Qu&yacute; kh&aacute;ch c&oacute; mặt tại ga quốc nội, s&acirc;n bay T&acirc;n Sơn Nhất trước giờ bay &iacute;t nhất 3 tiếng.<br />Đại diện c&ocirc;ng ty Du Lịch Việt đ&oacute;n v&agrave; hỗ trợ Qu&yacute; Kh&aacute;ch l&agrave;m thủ tục đ&oacute;n chuyến bay đi H&agrave; Nội.<br />Đến s&acirc;n bay Nội B&agrave;i, Hướng Dẫn Vi&ecirc;n đ&oacute;n đo&agrave;n đến trung t&acirc;m Thủ Đ&ocirc; H&agrave; Nội.<br />Viếng Lăng B&aacute;c (trừ ng&agrave;y thứ hai, thứ s&aacute;u bảo tr&igrave; Lăng).<br />Tham quan thủ đ&ocirc; H&agrave; Nội với: Phủ Chủ Tịch, ao c&aacute;, nh&agrave; s&agrave;n B&aacute;c Hồ, Ch&ugrave;a Một Cột, Bảo T&agrave;ng Hồ Ch&iacute; Minh.</div>
<div style="padding-left: 30px;">&nbsp;</div>
</div>
<div class="mda-day">
<div><em>Trưa:</em></div>
<div>&nbsp;</div>
<div style="padding-left: 30px;">D&ugrave;ng cơm trưa.&nbsp;<br />Tham quan Văn Miếu-Quốc Tử Gi&aacute;m, ch&ugrave;a Trấn Quốc, Hồ T&acirc;y, Hồ Tr&uacute;c Bạch, Hồ Ho&agrave;n Kiếm, Đền Ngọc Sơn.</div>
<div style="padding-left: 30px;">&nbsp;</div>
</div>
<div class="mda-day"><em>Tối:</em></div>
<div class="mda-day">&nbsp;</div>
<div class="mda-day" style="padding-left: 30px;">D&ugrave;ng bữa tối. Nghỉ đ&ecirc;m tại H&agrave; Nội.&nbsp;Qu&yacute; kh&aacute;ch c&oacute; thể dạo một v&ograve;ng quanh thủ đ&ocirc;, thưởng thức c&aacute;c m&oacute;n đặc sản: b&uacute;n chả c&aacute; Lả Vọng, phở H&agrave; Nội, b&uacute;ng thang, b&uacute;n chả, &hellip; hoặc thưởng thức caf&eacute; ở phố cổ, Hồ Gươm.</div>
<div class="mda-day" style="padding-left: 30px;">&nbsp;</div>
<div class="mda-day"><span style="font-size: 12pt;"><strong>HẠ LONG &ndash; H&Agrave; NỘI &ndash; TP.HCM (Ăn s&aacute;ng, trưa)</strong></span></div>
<div class="mda-day">
<div class="mda-day">
<div>&nbsp;</div>
<div>S&aacute;ng:</div>
<div>&nbsp;</div>
<div style="padding-left: 30px;">D&ugrave;ng buffet s&aacute;ng tại kh&aacute;ch sạn.<br />Xuống thuyền ngoạn cảnh Vịnh Hạ Long &ndash; Di sản thi&ecirc;n nhi&ecirc;n thế giới với h&agrave;ng ng&agrave;n đảo đ&aacute; c&oacute; h&igrave;nh dạng kỳ vị - chi&ecirc;m ngưỡng vẻ đẹp trau chuốt, lộng lẫy của động Thi&ecirc;n Cung, vẻ đẹp si&ecirc;u nhi&ecirc;n của h&ograve;n Đỉnh Hương, G&agrave; Chọi, Ch&oacute; Đ&aacute;&hellip;&nbsp;</div>
<div style="padding-left: 30px;">&nbsp;</div>
</div>
<div class="mda-day">
<div>Trưa:</div>
<div>&nbsp;</div>
<div style="padding-left: 30px;">D&ugrave;ng cơm trưa tr&ecirc;n t&agrave;u.<br />Đo&agrave;n trở về H&agrave; Nội, Hướng dẫn vi&ecirc;n tiễn đo&agrave;n ra s&acirc;n bay Nội B&agrave;i đ&oacute;n chuyến bay về TP.HCM.<br />Kết th&uacute;c chương tr&igrave;nh tham quan, chia tay v&agrave; hẹn gặp lại.</div>
</div>
</div>
</div>', 'description' => '<p>Du lịch Mỹ ngắm hoa anh đ&agrave;o 2017 H&agrave;ng năm, lễ hội hoa anh đ&agrave;o ở Washington được tổ chức long trọng v&agrave;o m&ugrave;a xu&acirc;n. Mỗi năm c&oacute; hơn một triệu du kh&aacute;ch đến Washington DC để ngắm c&aacute;c c&acirc;y anh đ&agrave;o nở hoa, b&aacute;o hiệu m&ugrave;a xu&acirc;n lại trở về tr&ecirc;n thủ đ&ocirc;.</p>
<p>Du lịch Mỹ ngắm hoa anh đ&agrave;o 2017 H&agrave;ng năm, lễ hội hoa anh đ&agrave;o ở Washington được tổ chức long trọng v&agrave;o m&ugrave;a xu&acirc;n. Mỗi năm c&oacute; hơn một triệu du kh&aacute;ch đến Washington DC để ngắm c&aacute;c c&acirc;y anh đ&agrave;o nở hoa, b&aacute;o hiệu m&ugrave;a xu&acirc;n lại trở về tr&ecirc;n thủ đ&ocirc;.</p>
<p>Du lịch Mỹ ngắm hoa anh đ&agrave;o 2017 H&agrave;ng năm, lễ hội hoa anh đ&agrave;o ở Washington được tổ chức long trọng v&agrave;o m&ugrave;a xu&acirc;n. Mỗi năm c&oacute; hơn một triệu du kh&aacute;ch đến Washington DC để ngắm c&aacute;c c&acirc;y anh đ&agrave;o nở hoa, b&aacute;o hiệu m&ugrave;a xu&acirc;n lại trở về tr&ecirc;n thủ đ&ocirc;.</p>
<p><img src="http://travel.com/uploads/kham-pha-vung-dat-vua-kong_du-lich-viet.jpg" alt="" width="720" height="550" /></p>', 'journey' =>'Hà Nội – Đầm Vân Long – Chùa Bái Đính – Tràng An – Hạ Long', 'note' => ' <p><strong>GI&Aacute; TOUR </strong><strong>BAO GỒM:</strong><u></u></p>
<ul>
<li>V&eacute; m&aacute;y bay khứ hồi Quốc tế: Tp.HCM &ndash; New York // Los Angeles &ndash; Tp.HCM</li>
<li>V&eacute; m&aacute;y bay chặng nội địa: Washington D.C &ndash; Las Vegas hoặc Los Angeles.</li>
<li>Cước h&agrave;nh l&yacute; kiện thứ 1 của chặng bay nội địa tại Mỹ.</li>
<li>Kh&aacute;ch sạn ti&ecirc;u chuẩn 3 &ndash; 4 sao (ph&ograve;ng đ&ocirc;i - Ph&ograve;ng ba sẽ bố tr&iacute; khi cần thiết).</li>
<li>Hướng dẫn vi&ecirc;n tiếng Việt theo đo&agrave;n từ Việt Nam.</li>
<li>Ăn uống theo chương tr&igrave;nh.</li>
<li>Thuế c&aacute;c loại: phi trường, h&agrave;ng kh&ocirc;ng, an ninh, xăng dầu.</li>
<li>Qu&agrave; tặng của C&ocirc;ng Ty: n&oacute;n, vali k&eacute;o, ba da hộ chiếu.</li>
<li>Xe đưa đ&oacute;n tham quan theo chương tr&igrave;nh (thời gian chạy tối đa 12h/ng&agrave;y)</li>
<li>Bảo hiểm du lịch trọn tour mức đền b&ugrave; tối đa 1.000.000.000 VND/ trường hợp.</li>
</ul>
<p><strong>GI&Aacute; TOUR KH&Ocirc;NG BAO GỒM:</strong></p>
<ul>
<li>Hộ chiếu: c&ograve;n hạn tr&ecirc;n 06 th&aacute;ng t&iacute;nh đến ng&agrave;y khởi h&agrave;nh.</li>
<li>Lệ ph&iacute; xin Visa Hoa Kỳ (3.700.000 vnđ). TRƯỜNG HỢP KH&Ocirc;NG ĐẬU VISA, DU LỊCH VIỆT SẼ HO&Agrave;N LẠI 100% LỆ PH&Iacute; VISA CHO KH&Aacute;CH H&Agrave;NG.</li>
<li>Chi ph&iacute; h&agrave;nh l&yacute; k&yacute; gởi cho chặng nội địa từ kiện thứ 2 trở đi.</li>
<li>Tips cho HDV v&agrave; t&agrave;i xế (mức đề nghị 8 USD/ng&agrave;y/người)</li>
<li>C&aacute;c chi ph&iacute; c&aacute; nh&acirc;n kh&aacute;c kh&ocirc;ng nằm trong phần bao gồm.</li>
<li>Đối với kh&aacute;ch đi lẻ v&agrave; kh&ocirc;ng c&oacute; kh&aacute;ch kh&aacute;c gh&eacute;p ph&ograve;ng, qu&yacute; kh&aacute;ch sẽ phải chịu phụ ph&iacute; ph&ograve;ng đơn l&agrave; 11,500.000 vnđ</li>
</ul>
<p><strong>GI&Aacute; V&Eacute; TRẺ EM: (t&iacute;nh theo ng&agrave;y / th&aacute;ng / năm sinh)</strong></p>
<ul>
<li>Trẻ em từ 2 đến dưới 11 tuổi = 61.175.000</li>
<li>Trẻ em dưới 2 tuổi: 26.915.000</li>
</ul>
<p>*** Lưu &yacute;: Trẻ em ngủ chung giường với bố mẹ. Mỗi gia đ&igrave;nh chỉ được k&egrave;m 1 trẻ em, trẻ em thứ 2 đ&oacute;ng 90% để c&oacute; ti&ecirc;u chuẩn giường ri&ecirc;ng.</p>', 'quantity' => 20, 'booked' => 0, 'image' => 'http://travel.com/uploads/khai-hoan-mon-phap--du-lich-chau-au-mua-hoa-le-hoi-tulip_du-lich-viet.jpg', 'price' => 4000000, 'meta_key' => 'du-lich', 'name_seo' => 'Mien Bac', 'tag' => 'mienbac', 'start_date' => '2017-04-11', 'end_date' => '2017-04-19', 'status' => 1, 'is_hot' => 0, 'sale_id' => 2, 'province_id' => 1, 'traffic_id' =>1, 'destination_id' =>3, 'user_id' => 2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
    ['name' => 'Du Lịch Miền Bắc - Khám phá Đảo Đầu Lâu - Trang An dịp lễ', 'content' => '<div class="mda-title">
<div class="mda-title"><span style="font-size: 12pt;"><strong>TP.HCM &ndash; H&Agrave; NỘI (Ăn trưa, chiều)</strong></span></div>
<div class="mda-title">&nbsp;</div>
<div class="mda-day">
<div><em>S&aacute;ng:</em></div>
<div>&nbsp;</div>
<div style="padding-left: 30px;">Qu&yacute; kh&aacute;ch c&oacute; mặt tại ga quốc nội, s&acirc;n bay T&acirc;n Sơn Nhất trước giờ bay &iacute;t nhất 3 tiếng.<br />Đại diện c&ocirc;ng ty Du Lịch Việt đ&oacute;n v&agrave; hỗ trợ Qu&yacute; Kh&aacute;ch l&agrave;m thủ tục đ&oacute;n chuyến bay đi H&agrave; Nội.<br />Đến s&acirc;n bay Nội B&agrave;i, Hướng Dẫn Vi&ecirc;n đ&oacute;n đo&agrave;n đến trung t&acirc;m Thủ Đ&ocirc; H&agrave; Nội.<br />Viếng Lăng B&aacute;c (trừ ng&agrave;y thứ hai, thứ s&aacute;u bảo tr&igrave; Lăng).<br />Tham quan thủ đ&ocirc; H&agrave; Nội với: Phủ Chủ Tịch, ao c&aacute;, nh&agrave; s&agrave;n B&aacute;c Hồ, Ch&ugrave;a Một Cột, Bảo T&agrave;ng Hồ Ch&iacute; Minh.</div>
<div style="padding-left: 30px;">&nbsp;</div>
</div>
<div class="mda-day">
<div><em>Trưa:</em></div>
<div>&nbsp;</div>
<div style="padding-left: 30px;">D&ugrave;ng cơm trưa.&nbsp;<br />Tham quan Văn Miếu-Quốc Tử Gi&aacute;m, ch&ugrave;a Trấn Quốc, Hồ T&acirc;y, Hồ Tr&uacute;c Bạch, Hồ Ho&agrave;n Kiếm, Đền Ngọc Sơn.</div>
<div style="padding-left: 30px;">&nbsp;</div>
</div>
<div class="mda-day"><em>Tối:</em></div>
<div class="mda-day">&nbsp;</div>
<div class="mda-day" style="padding-left: 30px;">D&ugrave;ng bữa tối. Nghỉ đ&ecirc;m tại H&agrave; Nội.&nbsp;Qu&yacute; kh&aacute;ch c&oacute; thể dạo một v&ograve;ng quanh thủ đ&ocirc;, thưởng thức c&aacute;c m&oacute;n đặc sản: b&uacute;n chả c&aacute; Lả Vọng, phở H&agrave; Nội, b&uacute;ng thang, b&uacute;n chả, &hellip; hoặc thưởng thức caf&eacute; ở phố cổ, Hồ Gươm.</div>
<div class="mda-day" style="padding-left: 30px;">&nbsp;</div>
<div class="mda-day"><span style="font-size: 12pt;"><strong>HẠ LONG &ndash; H&Agrave; NỘI &ndash; TP.HCM (Ăn s&aacute;ng, trưa)</strong></span></div>
<div class="mda-day">
<div class="mda-day">
<div>&nbsp;</div>
<div>S&aacute;ng:</div>
<div>&nbsp;</div>
<div style="padding-left: 30px;">D&ugrave;ng buffet s&aacute;ng tại kh&aacute;ch sạn.<br />Xuống thuyền ngoạn cảnh Vịnh Hạ Long &ndash; Di sản thi&ecirc;n nhi&ecirc;n thế giới với h&agrave;ng ng&agrave;n đảo đ&aacute; c&oacute; h&igrave;nh dạng kỳ vị - chi&ecirc;m ngưỡng vẻ đẹp trau chuốt, lộng lẫy của động Thi&ecirc;n Cung, vẻ đẹp si&ecirc;u nhi&ecirc;n của h&ograve;n Đỉnh Hương, G&agrave; Chọi, Ch&oacute; Đ&aacute;&hellip;&nbsp;</div>
<div style="padding-left: 30px;">&nbsp;</div>
</div>
<div class="mda-day">
<div>Trưa:</div>
<div>&nbsp;</div>
<div style="padding-left: 30px;">D&ugrave;ng cơm trưa tr&ecirc;n t&agrave;u.<br />Đo&agrave;n trở về H&agrave; Nội, Hướng dẫn vi&ecirc;n tiễn đo&agrave;n ra s&acirc;n bay Nội B&agrave;i đ&oacute;n chuyến bay về TP.HCM.<br />Kết th&uacute;c chương tr&igrave;nh tham quan, chia tay v&agrave; hẹn gặp lại.</div>
</div>
</div>
</div>', 'description' => '<p>Du lịch Mỹ ngắm hoa anh đ&agrave;o 2017 H&agrave;ng năm, lễ hội hoa anh đ&agrave;o ở Washington được tổ chức long trọng v&agrave;o m&ugrave;a xu&acirc;n. Mỗi năm c&oacute; hơn một triệu du kh&aacute;ch đến Washington DC để ngắm c&aacute;c c&acirc;y anh đ&agrave;o nở hoa, b&aacute;o hiệu m&ugrave;a xu&acirc;n lại trở về tr&ecirc;n thủ đ&ocirc;.</p>
<p>Du lịch Mỹ ngắm hoa anh đ&agrave;o 2017 H&agrave;ng năm, lễ hội hoa anh đ&agrave;o ở Washington được tổ chức long trọng v&agrave;o m&ugrave;a xu&acirc;n. Mỗi năm c&oacute; hơn một triệu du kh&aacute;ch đến Washington DC để ngắm c&aacute;c c&acirc;y anh đ&agrave;o nở hoa, b&aacute;o hiệu m&ugrave;a xu&acirc;n lại trở về tr&ecirc;n thủ đ&ocirc;.</p>
<p>Du lịch Mỹ ngắm hoa anh đ&agrave;o 2017 H&agrave;ng năm, lễ hội hoa anh đ&agrave;o ở Washington được tổ chức long trọng v&agrave;o m&ugrave;a xu&acirc;n. Mỗi năm c&oacute; hơn một triệu du kh&aacute;ch đến Washington DC để ngắm c&aacute;c c&acirc;y anh đ&agrave;o nở hoa, b&aacute;o hiệu m&ugrave;a xu&acirc;n lại trở về tr&ecirc;n thủ đ&ocirc;.</p>
<p><img src="http://travel.com/uploads/kham-pha-vung-dat-vua-kong_du-lich-viet.jpg" alt="" width="720" height="550" /></p>', 'journey' =>'Hà Nội – Đầm Vân Long – Chùa Bái Đính – Tràng An – Hạ Long', 'note' => ' <p><strong>GI&Aacute; TOUR </strong><strong>BAO GỒM:</strong><u></u></p>
<ul>
<li>V&eacute; m&aacute;y bay khứ hồi Quốc tế: Tp.HCM &ndash; New York // Los Angeles &ndash; Tp.HCM</li>
<li>V&eacute; m&aacute;y bay chặng nội địa: Washington D.C &ndash; Las Vegas hoặc Los Angeles.</li>
<li>Cước h&agrave;nh l&yacute; kiện thứ 1 của chặng bay nội địa tại Mỹ.</li>
<li>Kh&aacute;ch sạn ti&ecirc;u chuẩn 3 &ndash; 4 sao (ph&ograve;ng đ&ocirc;i - Ph&ograve;ng ba sẽ bố tr&iacute; khi cần thiết).</li>
<li>Hướng dẫn vi&ecirc;n tiếng Việt theo đo&agrave;n từ Việt Nam.</li>
<li>Ăn uống theo chương tr&igrave;nh.</li>
<li>Thuế c&aacute;c loại: phi trường, h&agrave;ng kh&ocirc;ng, an ninh, xăng dầu.</li>
<li>Qu&agrave; tặng của C&ocirc;ng Ty: n&oacute;n, vali k&eacute;o, ba da hộ chiếu.</li>
<li>Xe đưa đ&oacute;n tham quan theo chương tr&igrave;nh (thời gian chạy tối đa 12h/ng&agrave;y)</li>
<li>Bảo hiểm du lịch trọn tour mức đền b&ugrave; tối đa 1.000.000.000 VND/ trường hợp.</li>
</ul>
<p><strong>GI&Aacute; TOUR KH&Ocirc;NG BAO GỒM:</strong></p>
<ul>
<li>Hộ chiếu: c&ograve;n hạn tr&ecirc;n 06 th&aacute;ng t&iacute;nh đến ng&agrave;y khởi h&agrave;nh.</li>
<li>Lệ ph&iacute; xin Visa Hoa Kỳ (3.700.000 vnđ). TRƯỜNG HỢP KH&Ocirc;NG ĐẬU VISA, DU LỊCH VIỆT SẼ HO&Agrave;N LẠI 100% LỆ PH&Iacute; VISA CHO KH&Aacute;CH H&Agrave;NG.</li>
<li>Chi ph&iacute; h&agrave;nh l&yacute; k&yacute; gởi cho chặng nội địa từ kiện thứ 2 trở đi.</li>
<li>Tips cho HDV v&agrave; t&agrave;i xế (mức đề nghị 8 USD/ng&agrave;y/người)</li>
<li>C&aacute;c chi ph&iacute; c&aacute; nh&acirc;n kh&aacute;c kh&ocirc;ng nằm trong phần bao gồm.</li>
<li>Đối với kh&aacute;ch đi lẻ v&agrave; kh&ocirc;ng c&oacute; kh&aacute;ch kh&aacute;c gh&eacute;p ph&ograve;ng, qu&yacute; kh&aacute;ch sẽ phải chịu phụ ph&iacute; ph&ograve;ng đơn l&agrave; 11,500.000 vnđ</li>
</ul>
<p><strong>GI&Aacute; V&Eacute; TRẺ EM: (t&iacute;nh theo ng&agrave;y / th&aacute;ng / năm sinh)</strong></p>
<ul>
<li>Trẻ em từ 2 đến dưới 11 tuổi = 61.175.000</li>
<li>Trẻ em dưới 2 tuổi: 26.915.000</li>
</ul>
<p>*** Lưu &yacute;: Trẻ em ngủ chung giường với bố mẹ. Mỗi gia đ&igrave;nh chỉ được k&egrave;m 1 trẻ em, trẻ em thứ 2 đ&oacute;ng 90% để c&oacute; ti&ecirc;u chuẩn giường ri&ecirc;ng.</p>', 'quantity' => 20, 'booked' => 0, 'image' => 'http://travel.com/uploads/du-lich-da-lat-tet-am-lich-2017-tu-ha-noi_du-lich-viet.jpg', 'price' => 4000000, 'meta_key' => 'du-lich', 'name_seo' => 'Mien Bac', 'tag' => 'mienbac', 'start_date' => '2017-04-11', 'end_date' => '2017-04-19', 'status' => 1, 'is_hot' => 0, 'sale_id' => 2, 'province_id' => 1, 'traffic_id' =>1, 'destination_id' =>3, 'user_id' => 2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]
            
    	]);
        // DB::table('users')->insert([[
        //     'name' =>"admin",
        //     'email' =>'manager4@gmail.com',
        //     'level'=>1,
        //     'password' => bcrypt('12345678'),
        // ],[
        //     'name' =>"member1",
        //     'email' =>'member1@gmail.com',
        //     'level'=>3,
        //     'password' => bcrypt('12345678'),
        // ]
        // ]);
    }
}