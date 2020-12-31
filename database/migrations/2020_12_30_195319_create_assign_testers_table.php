<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignTestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_testers', function (Blueprint $table) {
            $table->id();
            $table->string("invoice_id");
            $table->string("tester_name");
            $table->string("supplier_name");
            $table->string("sample_submission");
            $table->string("assign_date");

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
        Schema::dropIfExists('assign_testers');
    }
}
