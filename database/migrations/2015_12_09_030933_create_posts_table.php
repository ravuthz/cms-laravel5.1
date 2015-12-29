<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->boolean('status');
            $table->smallInteger('click_count')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('page_id')->unsigned();
            $table->timestamps();
            $table->timestamp('deleted_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('published_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            /*$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');*/
            /*$table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');*/
        });
    }

    public function down() {
        DB::statement('SET foreign_key_checks = 0');
        Schema::drop('posts');
        DB::statement('SET foreign_key_checks = 1');
    }
}