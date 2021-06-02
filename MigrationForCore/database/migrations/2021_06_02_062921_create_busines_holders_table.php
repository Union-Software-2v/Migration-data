<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinesHoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busines_holders', function (Blueprint $table) {
            $table->increments('id');
            $table->text('business_name');
            $table->string('owner_name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->text('owner_permanent_address');
            $table->text('owner_present_address');
            $table->text('business_address');
            $table->text('business_tin');
            $table->text('owner_tin');
            $table->string('nid_no');
            $table->integer('mobile_no');
            $table->string('ownership_type');
            $table->string('business_type');
            $table->integer('business_muldon')->unsigned();
            $table->date('last_treade_license_issue_year');
            $table->integer('license_fees')->unsigned();
            $table->integer('vat')->unsigned();
            $table->integer('singboard_tax')->unsigned();
            $table->integer('due')->unsigned();
            $table->integer('service_charge')->unsigned();
            $table->text('bibido');
            $table->unsignedBigInteger('total_collection_amount');
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
        Schema::dropIfExists('busines_holders');
    }
}
