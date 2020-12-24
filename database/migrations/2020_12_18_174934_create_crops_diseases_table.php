<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCropsDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crops_diseases', function (Blueprint $table) {
            $table->id();
            $table->string("crops_name");
            $table->string("crops_syptoms_1")->nullable();
            $table->string("crops_syptoms_2")->nullable();
            $table->string("crops_syptoms_3")->nullable();
            $table->string("crops_syptoms_4")->nullable();
            $table->string("crops_syptoms_5")->nullable();
            $table->string("remedy_1")->nullable();
            $table->string("remedy_2")->nullable();
            $table->string("remedy_3")->nullable();

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
        Schema::dropIfExists('crops_diseases');
    }
}
