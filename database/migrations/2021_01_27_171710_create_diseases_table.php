<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();
            $table->string("test_id")->nullable();
            $table->string("invoice_id")->nullable();
            $table->string("crops_id")->nullable();
            $table->string("crops_name")->nullable();
            $table->string("farmer_id")->nullable();
            $table->string("farmer_name")->nullable();
            $table->string("address")->nullable();
            $table->string("phone_no")->nullable();
            $table->string("dname")->nullable();
            $table->string("crops_syptoms")->nullable();
            $table->string("remedy")->nullable();
            $table->string("date")->nullable();
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
        Schema::dropIfExists('diseases');
    }
}
