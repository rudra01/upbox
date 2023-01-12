<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('tackerID');
            $table->date('ShipmentDate')->nullable();
            $table->time('ShipmentTime')->nullable();
            $table->text('Location')->nullable();
            $table->text('Comments')->nullable();
            $table->text('barcode')->nullable();
            $table->text('status')->nullable();
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
        Schema::dropIfExists('shipment_histories');
    }
}
