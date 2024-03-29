<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::create('rooms', function (Blueprint $table) {
    $table->increments('id');
    $table->string('room_type');
    $table->string('use_type')->nullable();
    $table->integer('monthly_rent_rate')->unsigned();
    $table->integer('yearly_value')->unsigned();
    $table->integer('yearly_tax')->unsigned();
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
        Schema::dropIfExists('rooms');
    }
}
