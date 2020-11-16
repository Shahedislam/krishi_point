<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCropsSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crops_samples', function (Blueprint $table) {
            $table->id();
            $table->string("NAME");
            $table->string("FARMER_ID");
            $table->string("PHONE_NO");
            $table->string("ADDRESS");
            $table->string("CROPS_ID");
            $table->string("CROPS_NAME");
            $table->string("SUBMISSION_DATE");
            $table->string("DELIVERY_DATE");
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
        Schema::dropIfExists('crops_samples');
    }
}
