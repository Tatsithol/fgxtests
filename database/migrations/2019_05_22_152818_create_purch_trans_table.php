<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purch_trans', function (Blueprint $table) {
            $table->bigIncrements('purch_id');
            $table->decimal('price',7,2);
            $table->integer('discount');
            $table->integer('prod_id');
            $table->integer('balance_status');
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
        Schema::dropIfExists('purch_trans');
    }
}
