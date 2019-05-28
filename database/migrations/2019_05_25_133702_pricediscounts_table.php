<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PricediscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pricediscounts', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('price_min');
             $table->integer('price_max');
             $table->integer('percentage');
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
        //
         Schema::dropIfExists('pricediscounts');
    }
}
