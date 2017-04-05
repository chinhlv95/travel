<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourImage extends Model
{
    //
    protected $table    = "tour_images";
    protected $fillable = ['id', 'name', 'tour_id'];

    /**
     * Get tour.
     */
    public function tour()
    {
        return $this->belongsTo('App\Models\Tour','tour_id','id');
    }
}
