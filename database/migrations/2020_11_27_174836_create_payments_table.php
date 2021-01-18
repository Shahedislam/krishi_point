<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string("Payment_number")->nullable();
            $table->string("test_name")->nullable();
            $table->string("price")->nullable();
            $table->string("test_count")->nullable();
            $table->string("total_price")->nullable();
            $table->string("farmer_id")->nullable();
            $table->string("program_id_fk")->nullable();
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
        Schema::dropIfExists('payments');
    }
}
