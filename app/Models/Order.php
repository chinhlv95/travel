<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table    = "orders";
    public $timestamps = true;
    protected $fillable = ['id', 'sale', 'quantity_tourer', 'code', 'price', 'tour_id','status', 'customer_id', 'pay_id'];
}

