<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('data_id')->references('id')->on('datas');
            $table->unsignedBigInteger('data_id');
            $table->string('value');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('product_id');
            $table->string('ref');
            $table->timestamps();
        });
    }
          
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
