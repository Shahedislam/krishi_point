<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testers', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("address")->nullable();
            $table->string("phone_no")->nullable();
            $table->string("user_id")->nullable();
            $table->string("email")->nullable();
            $table->string("designation")->nullable();
            $table->string("institute")->nullable();
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
        Schema::dropIfExists('testers');
    }
}
