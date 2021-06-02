<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('word_no')->unsigned();
            $table->integer('holding_no')->unsigned();
            $table->text('village');
            $table->string('post_office_name');
            $table->integer('post_code')->unsigned();
            $table->string('religion');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('husband_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('date_of_birth');
            $table->string('nid')->unique();
            $table->integer('mobile_no');
            $table->text('occasion');
            $table->unsignedBigInteger('monthly_income');
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
        Schema::dropIfExists('family_members');
    }
}
