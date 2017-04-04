<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class CateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert([
        	['name' => 'test','meta_key' => "aaaa",'status'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
        	['name' => 'test1','meta_key' => "aaaa",'status'=>1,'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
    	]);
    }
}
