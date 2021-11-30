<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('flat_id')->unsigned();
            $table->foreign('flat_id')->references('id')->on('flats');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->mediumText('nid');
            $table->integer('phone');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->mediumText('parents_nid')->nullable();
            $table->string('occupation');
            $table->string('job_address');
            $table->integer('office_phone');
            $table->integer('staying_people');
            $table->string('earning_person_name');
            $table->string('earning_person_occupation');
            $table->string('earning_person_job_address');
            $table->integer('earning_person_office_phone');
            $table->integer('earning_person_yearly_income')->nullable();
            $table->date('starting_date');
            $table->date('ending_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
