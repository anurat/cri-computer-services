<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ph_staff', function (Blueprint $table) {
            $table->integer('staff_id')->autoIncrement();
            $table->string('staff_prefix', 45);
            $table->string('staff_firstname', 75);
            $table->string('staff_lastname', 60);
            $table->string('staff_ldap', 50);
            $table->integer('start_date');
            $table->integer('end_date');
            $table->bigInteger('contract_expired_date');

            $table->primary('staff_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ph_staff');
    }
}
