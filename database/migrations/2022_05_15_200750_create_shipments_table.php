<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->text('Origin');
            $table->text('Destination');
            $table->integer('docornot');
            $table->integer('Noofpkgs');
            $table->integer('Totalweight');
            $table->integer('Length');
            $table->integer('width');
            $table->integer('height');
            $table->integer('volweight');
            $table->Longtext('DescripOfContents');
            $table->Text('barcodeno');
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
        Schema::dropIfExists('shipments');
    }
}
