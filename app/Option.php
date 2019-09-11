<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Data;

class Option extends Model

{
  	protected $table = "options";
    protected $fillable = [
   			
    			"id",
    			"data_id",
    			"value",
    			"product_id",
    			"ref",
   ];

     public function product(){
    	return $this->belongsTo('App\Product');

	}
}
