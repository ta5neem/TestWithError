<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturerReturnListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturer_return_lists', function (Blueprint $table) {
            $table->bigIncrements('manufacturer_return_list_id');
            $table->DateTime('date')->defined('11/2/2020');
            $table->integer('total_price');
            $table->integer('return_order_num');
            $table->bigInteger('manufactorer_id');
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
        Schema::dropIfExists('manufacturer_return_lists');
    }
}
