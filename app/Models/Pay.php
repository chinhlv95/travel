<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $table= "pays";
    protected $fillable = ['id', 'name'];
}
