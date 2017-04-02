<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    protected $table    = "destinations";
    protected $fillable = ['id', 'name', 'status', 'cate_id'];
}
