<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Destination extends Model
{
    //
    protected $table    = "destinations";
    protected $fillable = ['id', 'name', 'status', 'cate_id'];

    /**
     * Get category.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category','cate_id','id');
    }
    
}
