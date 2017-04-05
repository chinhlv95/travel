<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    protected $table    = "tours";
    protected $fillable = ['id', 'name', 'content', 'description', 'journey', 'note', 'quantity', 'booked', 'image', 'name', 'price', 'meta_key', 'name_seo', 'note', 'tag', 'start_date', 'end_date', 'status', 'is_hot', 'sale_id', 'province_id', 'traffic_id', 'destination_id', 'user_id' ];

    /**
     * Get Destination.
     */
    public function destination()
    {
        return $this->belongsTo('App\Models\Destination','destination_id','id');
    }

    /**
     * Get Province.
     */
    public function province()
    {
        return $this->belongsTo('App\Models\Province','province_id','id');
    }


    /**
     * Get Sale.
     */
    public function sale()
    {
        return $this->belongsTo('App\Models\Sale','sale_id','id');
    }

    /**
     * Get Traffic.
     */
    public function traffic()
    {
        return $this->belongsTo('App\Models\Traffic','traffic_id','id');
    }

    /**
     * Get User.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
