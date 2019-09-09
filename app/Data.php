<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
   protected $fillable = [
   		"name",
   		"type",
   		"product_id"

   ];

   	protected $table = "datas";

     public function product(){
    	return $this->belongsTo('App\Product');
    }
}
