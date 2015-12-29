<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUploadsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('path');
            $table->string('slug');
            $table->enum('type', ['file', 'music', 'video', 'image']);
            $table->timestamps();
        });
    }

    public function down() {
        DB::statement('SET foreign_key_checks = 0');
        Schema::drop('uploads');
        DB::statement('SET foreign_key_checks = 1');
    }
}
