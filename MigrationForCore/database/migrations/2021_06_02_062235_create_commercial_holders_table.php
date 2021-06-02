<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercialHoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercial_holders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('word_no')->unsigned();
            $table->integer('holding_no')->unsigned();
            $table->string('religion');
            $table->string('gender');
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('husband_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('nid')->unique();
            $table->integer('mobile_no');
            $table->integer('room_amount')->unsigned();
            $table->date('last_tax_pay_year');
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
        Schema::dropIfExists('commercial_holders');
    }
}
