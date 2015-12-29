<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('username', 70);
            $table->string('password', 70);
            $table->string('firstname', 70);
            $table->string('lastname', 70);
            $table->enum('type', ['admin', 'user']);
            $table->string('email')->unique();
            $table->string('phone', 11);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down() {
        DB::statement('SET foreign_key_checks = 0');
        Schema::drop('users');
        DB::statement('SET foreign_key_checks = 1');
    }
}
