<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
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
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->string('nickname', 30);
            $table->string('password', 255);
            $table->string('specialization', 50)->nullable();
            $table->string('avatar')->nullable();
            $table->float('karma', 3, 1)->default(0.0);
            $table->float('rating', 3, 1)->default(0.0);
            $table->timestamps();
        });
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('title', 100);
            $table->string('img')->nullable();
            $table->text('description')->nullable();
            $table->text('body');
            $table->smallInteger('rating_up')->default(0);
            $table->smallInteger('rating_down')->default(0);
            $table->unsignedSmallInteger('bookmarks')->default(0);
            $table->unsignedSmallInteger('views')->default(0);
            $table->unsignedSmallInteger('comments')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::create('hubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 70)->index();
            $table->timestamps();
        });
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 70)->index();
            $table->timestamps();
        });
        Schema::create('hub_post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('hub_id');
            $table->unsignedInteger('post_id');
            $table->timestamps();

            $table->foreign('hub_id')->references('id')->on('hubs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['hub_id', 'post_id']);
        });
        Schema::create('tag_post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('tag_id');
            $table->unsignedInteger('post_id');
            $table->timestamps();

            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['tag_id', 'post_id']);
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('hubs');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('hub_post');
        Schema::dropIfExists('tag_post');

        Schema::disableForeignKeyConstraints();
    }
}
