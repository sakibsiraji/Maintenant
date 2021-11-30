<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tenant_id')->unsigned();
            $table->foreign('tenant_id')->references('id')->on('tenants');
            $table->string('billing_month');
            $table->year('billing_year');
            $table->integer('rent');
            $table->integer('service_charge');
            $table->integer('electricity_bill');
            $table->mediumText('electricity_bill_copy');
            $table->integer('water_bill');
            $table->integer('gas_bill');
            $table->integer('telephone_bill');
            $table->integer('garage_bill');
            $table->integer('total_bill');
            $table->boolean('is_paid');
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
        Schema::dropIfExists('bills');
    }
}
