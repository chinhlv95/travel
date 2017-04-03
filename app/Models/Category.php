<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table    = "categories";
    protected $fillable = ['id', 'name', 'meta_key', 'status'];

    public function destination() 
    {
    	return $this->hasMany('App\Models\Destination','cate_id','id');
    }
}
