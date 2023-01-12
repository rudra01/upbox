<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsignorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignors', function (Blueprint $table) {
            $table->id();
            $table->text('Name');
            $table->text('City');
            $table->text('Country');
            $table->integer('zipcode');
            $table->longtext('Address');
            $table->text('Phoneno');
            $table->integer('ShipmentID');
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
        Schema::dropIfExists('consignors');
    }
}
