<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname','32');
            $table->string('lastname','32');
            $table->string('username','32');
            $table->string('email','64')->unique();
            $table->date('birthdate');
            $table->string('birthplace','64');
            $table->string('gender','1');
            $table->string('phone','16')->unique();
            $table->string('password');
            $table->boolean('iscounselor')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
