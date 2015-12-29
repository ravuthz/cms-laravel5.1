<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {
    public function up() {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('site_name');
            $table->string('site_slogan');
            $table->string('site_icon');
            $table->timestamps();
            $table->timestamp('deleted_at');
            $table->timestamp('published_at');
        });
    }

    public function down() {
        DB::statement('SET foreign_key_checks = 0');
        Schema::drop('settings');
        DB::statement('SET foreign_key_checks = 1');
    }
}
