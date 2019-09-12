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

    public function options(){
    	return $this->hasMany('App\Option');
    }

    public function optionsResumed(){
      return $this->hasMany('App\Option')->where('data_id', NULL)->select(['ref', 'value', 'updated_at']);
    }


}
