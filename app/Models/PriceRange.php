<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceRange extends Model
{
   protected $table= "price_ranges";
   protected $fillable = ['id', 'from_price', 'to_price'];
}
