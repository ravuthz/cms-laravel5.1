<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostTagTable extends Migration {
    public function up() {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned()->index();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

            $table->timestamps();
            $table->timestamp('deleted_at');
            $table->timestamp('published_at');
        });
    }

    public function down() {
        DB::statement('SET foreign_key_checks = 0');
        Schema::drop('post_tag');
        DB::statement('SET foreign_key_checks = 1');
    }
}
