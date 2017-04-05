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
        //
        DB::table('tours')->insert([
        	['name' => 'Du Lịch Miền Bắc - Hà Nội - Ninh Bình - Sapa lễ 30/4 bay từ Sài Gòn', 'content' => 'Hành trình: HÀ NỘI - NINH BÌNH - CHÙA BÁI ĐÍNH - TRÀNG AN - LÀO CAI - SAPA - CHINH PHỤC ĐỈNH FANSIPAN', 'description' => 'Du Lịch Miền Bắc lễ 30/4 & 1/5 - Chẳng cần phải đau đầu để suy nghĩ xem làm gì trong những ngày nghỉ lễ 30/4 sắp tới, hành trình Hà Nội – Ninh Bình – Tràng An – Bái Đính – Sapa – Fansipang 4 ngày của công ty Du Lịch Việt là những điểm nghỉ lễ lý tưởng dành cho du khách yêu du lịch, thích khám phá….', 'note' => ' Giờ bay có thể thay đổi theo quy định của hàng không. Du Lịch Việt sẽ thay đổi chương trình cho phù hợp với giờ bay mới nhưng sẽ không chịu trách nhiệm về các khoản chi phí phát sinh', 'quantity' => 30, 'booked' => 12, 'image' => 'sql.png', 'price' => 8213023, 'meta_key' => 'du-lich', 'name_seo' => 'Mien Bac', 'tag' => 'mienbac', 'start_date' => '2017-04-11', 'end_date' => '2017-04-19', 'status' => 0, 'is_hot' => 1, 'sale_id' => 1, 'province_id' => 1, 'traffic_id' =>1, 'destination_id' =>5, 'user_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => '111Du Lịch Miền Bắc - Hà Nội - Ninh Bình - Sapa lễ 30/4 bay từ Sài Gòn', 'content' => '111Hành trình: HÀ NỘI - NINH BÌNH - CHÙA BÁI ĐÍNH - TRÀNG AN - LÀO CAI - SAPA - CHINH PHỤC ĐỈNH FANSIPAN', 'description' => 'Du Lịch Miền Bắc lễ 30/4 & 1/5 - Chẳng cần phải đau đầu để suy nghĩ xem làm gì trong những ngày nghỉ lễ 30/4 sắp tới, hành trình Hà Nội – Ninh Bình – Tràng An – Bái Đính – Sapa – Fansipang 4 ngày của công ty Du Lịch Việt là những điểm nghỉ lễ lý tưởng dành cho du khách yêu du lịch, thích khám phá….', 'note' => ' Giờ bay có thể thay đổi theo quy định của hàng không. Du Lịch Việt sẽ thay đổi chương trình cho phù hợp với giờ bay mới nhưng sẽ không chịu trách nhiệm về các khoản chi phí phát sinh', 'quantity' => 30, 'booked' => 12, 'image' => 'sql.png', 'price' => 8213023, 'meta_key' => 'du-lich', 'name_seo' => 'Mien Bac', 'tag' => 'mienbac', 'start_date' => '2017-04-11', 'end_date' => '2017-04-19', 'status' => 0, 'is_hot' => 1, 'sale_id' => 1, 'province_id' => 1, 'traffic_id' =>1, 'destination_id' =>5, 'user_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]
    	]);
        DB::table('users')->insert([[
            'name' =>"admin",
            'email' =>'manager4@gmail.com',
            'level'=>1,
            'password' => bcrypt('12345678'),
        ],[
            'name' =>"member1",
            'email' =>'member1@gmail.com',
            'level'=>3,
            'password' => bcrypt('12345678'),
        ]
        ]);
    }
}