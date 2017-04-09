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
        	['name' => 'Du lịch Mỹ ngắm hoa anh đào 10 ngày giá tốt khởi hành từ TpHCM', 'content' => '<div class="mda-title">VIỆT NAM - TRANSIT - NEW YORK (ĂN TỐI)</div>
<div class="mda-day">
<div><strong>Buổi s&aacute;ng:&nbsp;</strong>HDV c&ocirc;ng ty Du Lịch Việt đ&oacute;n Qu&yacute; kh&aacute;ch tại ga quốc tế, phi trường T&acirc;n Sơn Nhất l&agrave;m thủ tục đ&aacute;p chuyến bay qu&aacute; cảnh tại s&acirc;n bay Bắc Kinh, sau đ&oacute; tiếp tục nối chuyến bay đi NEW YORK. Qu&yacute; kh&aacute;ch ăn uống tr&ecirc;n m&aacute;y bay. Vượt tuyến, đổi ng&agrave;y.</div>
</div>
<div class="mda-day">
<div>Đến <strong>NEW YORK</strong> c&ugrave;ng ng&agrave;y Qu&yacute; kh&aacute;ch l&agrave;m thủ tục nhập cảnh Mỹ. Xe đ&oacute;n đo&agrave;n tại phi trường v&agrave; đưa về trung t&acirc;m tự do thư gi&atilde;n sau một chuyến bay d&agrave;i.<br /><strong>Buổi tối:</strong>&nbsp;Qu&yacute; kh&aacute;ch d&ugrave;ng cơm tối, nhận ph&ograve;ng kh&aacute;ch sạn nghỉ ngơi.</div>
<div>&nbsp;</div>
<div>
<div class="mda-title">NEW YORK &ndash; CITY TOUR (ĂN 3 BỮA)</div>
<div class="mda-day">
<div><strong>Buổi s&aacute;ng: </strong>Qu&yacute; kh&aacute;ch d&ugrave;ng điểm t&acirc;m. Đo&agrave;n khởi h&agrave;nh tham quan Th&agrave;nh Phố NEW YORK:</div>
<ul>
<li><strong>Wall Street,</strong>&nbsp;nơi tọa lạc của s&agrave;n giao dịch chứng kho&aacute;n New York v&agrave; c&aacute;c trung t&acirc;m t&agrave;i ch&iacute;nh ng&acirc;n h&agrave;ng, v&agrave; cũng l&agrave; trung t&acirc;m t&agrave;i ch&iacute;nh của th&ecirc;́ giới.</li>
<li><strong>T&agrave;n t&iacute;ch của t&ograve;a nh&agrave; Thương Mại Thế Giới</strong>&nbsp;sau sự kiện ng&agrave;y 11 th&aacute;ng 9 năm 2001 (World Trade Center &ndash; Ground Zero)</li>
<li><strong>T&ograve;a nh&agrave; Emprie State nổi tiếng NEW YORK</strong>&nbsp;(tham quan b&ecirc;n ngo&agrave;i).</li>
<li><strong>Trụ Sở Li&ecirc;n Hiệp Quốc.</strong></li>
<li><strong>Đại Lộ 5 (Fifth Avenue)</strong>&nbsp;Trung t&acirc;m thời trang của nước Mỹ, nơi t&acirc;̣p trung c&aacute;c s&agrave;n Catwalk v&agrave; c&aacute;c thương hi&ecirc;̣u thời trang lớn của th&ecirc;́ giới</li>
<li><strong>Trung T&acirc;m Rockerfeller</strong>&nbsp;&ndash; Trung t&acirc;m thương mại s&acirc;̀m u&acirc;́t, nơi đặt đại bản doanh của k&ecirc;nh truy&ecirc;̀n h&igrave;nh NBC.</li>
</ul>
</div>
</div>
</div>', 'description' => '<p>Du lịch Mỹ ngắm hoa anh đ&agrave;o 2017 H&agrave;ng năm, lễ hội hoa anh đ&agrave;o ở Washington được tổ chức long trọng v&agrave;o m&ugrave;a xu&acirc;n. Mỗi năm c&oacute; hơn một triệu du kh&aacute;ch đến Washington DC để ngắm c&aacute;c c&acirc;y anh đ&agrave;o nở hoa, b&aacute;o hiệu m&ugrave;a xu&acirc;n lại trở về tr&ecirc;n thủ đ&ocirc;.</p>
<p>Du lịch Mỹ ngắm hoa anh đ&agrave;o 2017 H&agrave;ng năm, lễ hội hoa anh đ&agrave;o ở Washington được tổ chức long trọng v&agrave;o m&ugrave;a xu&acirc;n. Mỗi năm c&oacute; hơn một triệu du kh&aacute;ch đến Washington DC để ngắm c&aacute;c c&acirc;y anh đ&agrave;o nở hoa, b&aacute;o hiệu m&ugrave;a xu&acirc;n lại trở về tr&ecirc;n thủ đ&ocirc;.</p>
<p>Du lịch Mỹ ngắm hoa anh đ&agrave;o 2017 H&agrave;ng năm, lễ hội hoa anh đ&agrave;o ở Washington được tổ chức long trọng v&agrave;o m&ugrave;a xu&acirc;n. Mỗi năm c&oacute; hơn một triệu du kh&aacute;ch đến Washington DC để ngắm c&aacute;c c&acirc;y anh đ&agrave;o nở hoa, b&aacute;o hiệu m&ugrave;a xu&acirc;n lại trở về tr&ecirc;n thủ đ&ocirc;.</p>
<p><img src="http://travel.com/uploads/du-lich-da-lat-tet-am-lich-2017-tu-ha-noi_du-lich-viet_2.jpg" alt="" width="720" height="540" /></p>', 'journey' =>'New York – Philadelphia – Washington D.C – Las Vegas – Los Angeles', 'note' => ' <p><strong>GI&Aacute; TOUR </strong><strong>BAO GỒM:</strong><u></u></p>
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
<p>*** Lưu &yacute;: Trẻ em ngủ chung giường với bố mẹ. Mỗi gia đ&igrave;nh chỉ được k&egrave;m 1 trẻ em, trẻ em thứ 2 đ&oacute;ng 90% để c&oacute; ti&ecirc;u chuẩn giường ri&ecirc;ng.</p>', 'quantity' => 20, 'booked' => 0, 'image' => 'http://travel.com/uploads/tf_160701_relaxtravel-SIHANOUKVILLE-2.jpg', 'price' => 3000000, 'meta_key' => 'du-lich', 'name_seo' => 'Mien Bac', 'tag' => 'mienbac', 'start_date' => '2017-04-11', 'end_date' => '2017-04-19', 'status' => 1, 'is_hot' => 1, 'sale_id' => 1, 'province_id' => 2, 'traffic_id' =>1, 'destination_id' =>4, 'user_id' => 2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
    ['name' => 'Du lịch Mỹ ngắm hoa anh đào 10 ngày giá tốt khởi hành từ TpHCM', 'content' => '<div class="mda-title">VIỆT NAM - TRANSIT - NEW YORK (ĂN TỐI)</div>
<div class="mda-day">
<div><strong>Buổi s&aacute;ng:&nbsp;</strong>HDV c&ocirc;ng ty Du Lịch Việt đ&oacute;n Qu&yacute; kh&aacute;ch tại ga quốc tế, phi trường T&acirc;n Sơn Nhất l&agrave;m thủ tục đ&aacute;p chuyến bay qu&aacute; cảnh tại s&acirc;n bay Bắc Kinh, sau đ&oacute; tiếp tục nối chuyến bay đi NEW YORK. Qu&yacute; kh&aacute;ch ăn uống tr&ecirc;n m&aacute;y bay. Vượt tuyến, đổi ng&agrave;y.</div>
</div>
<div class="mda-day">
<div>Đến <strong>NEW YORK</strong> c&ugrave;ng ng&agrave;y Qu&yacute; kh&aacute;ch l&agrave;m thủ tục nhập cảnh Mỹ. Xe đ&oacute;n đo&agrave;n tại phi trường v&agrave; đưa về trung t&acirc;m tự do thư gi&atilde;n sau một chuyến bay d&agrave;i.<br /><strong>Buổi tối:</strong>&nbsp;Qu&yacute; kh&aacute;ch d&ugrave;ng cơm tối, nhận ph&ograve;ng kh&aacute;ch sạn nghỉ ngơi.</div>
<div>&nbsp;</div>
<div>
<div class="mda-title">NEW YORK &ndash; CITY TOUR (ĂN 3 BỮA)</div>
<div class="mda-day">
<div><strong>Buổi s&aacute;ng: </strong>Qu&yacute; kh&aacute;ch d&ugrave;ng điểm t&acirc;m. Đo&agrave;n khởi h&agrave;nh tham quan Th&agrave;nh Phố NEW YORK:</div>
<ul>
<li><strong>Wall Street,</strong>&nbsp;nơi tọa lạc của s&agrave;n giao dịch chứng kho&aacute;n New York v&agrave; c&aacute;c trung t&acirc;m t&agrave;i ch&iacute;nh ng&acirc;n h&agrave;ng, v&agrave; cũng l&agrave; trung t&acirc;m t&agrave;i ch&iacute;nh của th&ecirc;́ giới.</li>
<li><strong>T&agrave;n t&iacute;ch của t&ograve;a nh&agrave; Thương Mại Thế Giới</strong>&nbsp;sau sự kiện ng&agrave;y 11 th&aacute;ng 9 năm 2001 (World Trade Center &ndash; Ground Zero)</li>
<li><strong>T&ograve;a nh&agrave; Emprie State nổi tiếng NEW YORK</strong>&nbsp;(tham quan b&ecirc;n ngo&agrave;i).</li>
<li><strong>Trụ Sở Li&ecirc;n Hiệp Quốc.</strong></li>
<li><strong>Đại Lộ 5 (Fifth Avenue)</strong>&nbsp;Trung t&acirc;m thời trang của nước Mỹ, nơi t&acirc;̣p trung c&aacute;c s&agrave;n Catwalk v&agrave; c&aacute;c thương hi&ecirc;̣u thời trang lớn của th&ecirc;́ giới</li>
<li><strong>Trung T&acirc;m Rockerfeller</strong>&nbsp;&ndash; Trung t&acirc;m thương mại s&acirc;̀m u&acirc;́t, nơi đặt đại bản doanh của k&ecirc;nh truy&ecirc;̀n h&igrave;nh NBC.</li>
</ul>
</div>
</div>
</div>', 'description' => '<p>Du lịch Mỹ ngắm hoa anh đ&agrave;o 2017 H&agrave;ng năm, lễ hội hoa anh đ&agrave;o ở Washington được tổ chức long trọng v&agrave;o m&ugrave;a xu&acirc;n. Mỗi năm c&oacute; hơn một triệu du kh&aacute;ch đến Washington DC để ngắm c&aacute;c c&acirc;y anh đ&agrave;o nở hoa, b&aacute;o hiệu m&ugrave;a xu&acirc;n lại trở về tr&ecirc;n thủ đ&ocirc;.</p>
<p>Du lịch Mỹ ngắm hoa anh đ&agrave;o 2017 H&agrave;ng năm, lễ hội hoa anh đ&agrave;o ở Washington được tổ chức long trọng v&agrave;o m&ugrave;a xu&acirc;n. Mỗi năm c&oacute; hơn một triệu du kh&aacute;ch đến Washington DC để ngắm c&aacute;c c&acirc;y anh đ&agrave;o nở hoa, b&aacute;o hiệu m&ugrave;a xu&acirc;n lại trở về tr&ecirc;n thủ đ&ocirc;.</p>
<p>Du lịch Mỹ ngắm hoa anh đ&agrave;o 2017 H&agrave;ng năm, lễ hội hoa anh đ&agrave;o ở Washington được tổ chức long trọng v&agrave;o m&ugrave;a xu&acirc;n. Mỗi năm c&oacute; hơn một triệu du kh&aacute;ch đến Washington DC để ngắm c&aacute;c c&acirc;y anh đ&agrave;o nở hoa, b&aacute;o hiệu m&ugrave;a xu&acirc;n lại trở về tr&ecirc;n thủ đ&ocirc;.</p>
<p><img src="http://travel.com/uploads/du-lich-da-lat-tet-am-lich-2017-tu-ha-noi_du-lich-viet_2.jpg" alt="" width="720" height="540" /></p>', 'journey' =>'New York – Philadelphia – Washington D.C – Las Vegas – Los Angeles', 'note' => ' <p><strong>GI&Aacute; TOUR </strong><strong>BAO GỒM:</strong><u></u></p>
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
<p>*** Lưu &yacute;: Trẻ em ngủ chung giường với bố mẹ. Mỗi gia đ&igrave;nh chỉ được k&egrave;m 1 trẻ em, trẻ em thứ 2 đ&oacute;ng 90% để c&oacute; ti&ecirc;u chuẩn giường ri&ecirc;ng.</p>', 'quantity' => 20, 'booked' => 0, 'image' => 'http://travel.com/uploads/tf_160701_relaxtravel-SIHANOUKVILLE-2.jpg', 'price' => 5000000, 'meta_key' => 'du-lich', 'name_seo' => 'Mien Bac', 'tag' => 'mienbac', 'start_date' => '2017-05-11', 'end_date' => '2017-04-19', 'status' => 1, 'is_hot' => 1, 'sale_id' => 1, 'province_id' => 1, 'traffic_id' =>2, 'destination_id' =>2, 'user_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]
            
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