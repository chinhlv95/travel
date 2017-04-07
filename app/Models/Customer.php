<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table    = "customers";
    public $timestamps  = true;
    protected $fillable = ['id', 'fullname', 'email', 'phone', 'birthday', 'gender', 'address', 'note','created_at', 'updated_at'];
}
