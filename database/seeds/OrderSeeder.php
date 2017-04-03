<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
        DB::table('orders')->insert([
        	[
        	'sale' => 10,
        	'quantity_tourer' => 2, 
        	 'price'=>2000000,
        	 'code'=>"aaaaa",
        	 'tour_id'=>1,
        	 'customer_id'=>1,
        	 'pay_id'=>1,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
        	
        	
    	]);
    }
}
