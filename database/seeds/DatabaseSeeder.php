<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(CateSeeder::class);

        DB::table('users')->insert([[
            'name' =>"admin",
            'email' =>'admin@gmail.com',
            'level'=>1,
            'password' => bcrypt('12345678'),
        ],
        [
            'name' =>"manager",
            'email' =>'manager@gmail.com',
            'level'=>2,
            'password' => bcrypt('12345678'),
        ],
        [
            'name' =>"member",
            'email' =>'member@gmail.com',
            'level'=>3,
            'password' => bcrypt('12345678'),
        ]
        ]);

        // DB::table('users')->insert([
        //     'name' =>"manager",
        //     'email' =>'manager@gmail.com',
        //     'level'=>2,
        //     'password' => bcrypt('12345678'),
        // ]);

     //   $this->call(OrderSeeder::class);
     //   	DB::table('categories')->insert([
     //    	['name' => 'Du lịch trong nước','meta_key' => 'trong-nuoc','status' => 0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
     //    	['name' => 'Du lịch nước ngoài','meta_key' => 'ngoai-nuoc','status' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
    	// ]);

    }
}
