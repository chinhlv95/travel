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
