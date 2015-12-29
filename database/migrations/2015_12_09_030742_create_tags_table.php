<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagsTable extends Migration {
    public function up() {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
            $table->timestamp('deleted_at');
            $table->timestamp('published_at');
        });
    }

    public function down() {
        Schema::drop('tags');

    }
}
