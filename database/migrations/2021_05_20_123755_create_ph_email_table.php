<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ph_email', function (Blueprint $table) {
            $table->integer('email_id');
            $table->integer('staff_id');
            $table->string('email_address', 60);

            $table->primary('email_id');
            $table->foreign('staff_id')->references('staff_id')->on('ph_staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ph_email');
    }
}
