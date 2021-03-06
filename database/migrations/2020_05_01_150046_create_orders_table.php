<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('CustomerID');
            $table->foreign('CustomerID')->references('id')->on('users');
            $table->timestamp('OrderingTime');
           $table->integer('Rating');
           $table->integer('AddressID');
           $table->foreign('AddressID')->references('id')->on('address');
             $table->text('Description');
            $table->string('Status');
            $table->float('Total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
