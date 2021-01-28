<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduceResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produce_results', function (Blueprint $table) {
            $table->id();
            $table->string("labtest_id")->nullable();
            $table->string("inserted_by")->nullable();
            $table->string("invoice_id")->nullable();
            $table->string("soil_id")->nullable();
            $table->string("farmer_id")->nullable();
            $table->string("farmer_name")->nullable();
            $table->string("address")->nullable();
            $table->string("phone_no")->nullable();
            $table->string("Phs")->nullable();
            $table->string("phosphorus")->nullable();
            $table->string("potassium")->nullable();
            $table->string("calcium")->nullable();
            $table->string("organic_matter")->nullable();
            $table->string("acidity")->nullable();
            $table->string("sulfer")->nullable();
            $table->string("cec")->nullable();
            $table->string("nitrogen")->nullable();
            $table->string("potash")->nullable();
            $table->string("zinc")->nullable();
            $table->string("lime")->nullable();
            $table->string("comment")->nullable();
            $table->string("result")->nullable();
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
        Schema::dropIfExists('produce_results');
    }
}
