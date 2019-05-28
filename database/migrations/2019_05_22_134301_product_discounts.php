<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductDiscounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('productdiscounts', function (Blueprint $table) {
            $table->increments('prodi_id',12);
            $table->integer('pro_id');
            $table->integer('discount_id');
            $table->dateTime('purchase_at');
           
             }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('productdiscounts');
    }
}
