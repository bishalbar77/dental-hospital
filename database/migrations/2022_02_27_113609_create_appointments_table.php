<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('date');
            $table->string('time');
            $table->string('name');
            $table->string('age');
            $table->string('phone');
            $table->string('email');
            $table->string('gender');
            $table->string('family_members_count');
            $table->string('address');
            $table->integer('status')->default(0);
            $table->string('category')->default("dental");
            $table->timestamps();
        });
        Schema::table('appointments',function($table){
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
