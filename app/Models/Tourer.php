<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tourer extends Model
{
	protected $table    = "tourers";
    protected $fillable = ['id', 'fullname', 'phone', 'birthday', 'gender', 'address', 'order_id'];
}
