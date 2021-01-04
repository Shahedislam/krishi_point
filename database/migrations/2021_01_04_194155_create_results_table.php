<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string("lab_id");
            $table->string("Phs");
            $table->string("phosphorus");
            $table->string("potassium");
            $table->string("email");
            $table->string("calcium");
            $table->string("organic_matter");
            $table->string("cec");
            $table->string("nitrogen");
            $table->string("phosphorus_amount");
            $table->string("potash");
            $table->string("zinc");
            $table->string("lime");
            $table->string("comment1");
            $table->string("comment2");
            $table->string("comment3");
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
        Schema::dropIfExists('results');
    }
}
