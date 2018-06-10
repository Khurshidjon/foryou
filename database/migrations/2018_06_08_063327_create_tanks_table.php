<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tiers');
            $table->string('tanks');
            $table->integer('deamont');
            $table->integer('cash');
            $table->string('armory');
            $table->string('tech');
            $table->string('elite');
            $table->string('platform');
            $table->string('price');
            $table->string('siller_name');
            $table->string('phone_number');
            $table->string('country');
            $table->string('region');
            $table->string('guarantor');
            $table->string('metting');
            $table->string('plans');
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
        Schema::dropIfExists('tanks');
    }
}
