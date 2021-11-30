<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->integer('beds')->nullable();
            $table->integer('baths')->nullable();
            $table->integer('garages')->nullable();
            $table->integer('size')->nullable();
            $table->integer('rent');
            $table->integer('service_charge');
            $table->integer('monthly_water_bill');
            $table->integer('monthly_gas_bill');
            $table->integer('meter_no');
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
        Schema::dropIfExists('flats');
    }
}
