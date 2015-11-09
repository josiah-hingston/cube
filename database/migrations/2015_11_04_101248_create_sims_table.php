<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sims', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->integer('apple_id')->unsigned()->nullable();
            $table->integer('android_id')->unsigned()->nullable();
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('apple_id')->references('id')->on('apples');
            $table->foreign('android_id')->references('id')->on('androids');
            $table->string('sim_no');
            $table->string('number');
            $table->string('tariff');
            $table->boolean('roaming');
            $table->boolean('dcoo');
            $table->timestamp('activated_date');
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
        Schema::drop('sims');
    }
}
