<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaces', function (Blueprint $table) {
            $table->bigIncrements('purchace_id');
            $table->integer('order_num');
            $table->integer('total_price');
            $table->bigInteger('manufacturer_id');
            $table->bigInteger('user_id');
            $table->DateTime('pay_date');
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
        Schema::dropIfExists('purchaces');
    }
}
