<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Refrence extends Model
{
      use SoftDeletes;

       protected $guarded = array();


 public function CatName(){
     	return Category::where('id',$this->category_id)->first();
     }


         public function categories()
    {
        return $this->belongsTo('App\Models\Category');
        
    } 

}
