<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Data;
class Product extends Model
{
   protected $fillable = [
   			"name",
   			"notes",
   			"status",
   			"id"

   ];

    public function datas(){
    	return $this->hasMany('App\Data');
    }


}
