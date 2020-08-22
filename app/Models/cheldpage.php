<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Pages;

class cheldpage extends Model
{



    protected $guarded = array();
   public function pageName(){
     	return Pages::where('id',$this->page_id)->first();
     }
}
