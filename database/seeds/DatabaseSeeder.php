<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert([
            'name' =>"manager",
            'email' =>'manager@gmail.com',
            'level'=>2,
            'password' => bcrypt('12345678'),
        ]);
    }
}
