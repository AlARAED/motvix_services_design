<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{



         use SoftDeletes;

    protected $guarded = array();


   public function refrences()
    {
        return $this->hasMany('App\Models\Refrence');
    }



 

    
}
