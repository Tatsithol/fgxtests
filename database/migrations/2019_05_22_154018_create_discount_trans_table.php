<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount_trans', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('pro_id');
             $table->integer('discount_id');
             $table->integer('Reason_id');
             $table->dateTime('expiry');
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
        Schema::dropIfExists('discount_trans');
    }
}
