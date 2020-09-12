<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            //meta data
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_image')->nullable();
            $table->string('slug')->unique();

            $table->string('title');
            $table->text('subtitle');
            $table->longText('body');
            $table->integer('read_minutes')->nullable();
            $table->string('publish_date')->nullable();
            $table->integer('author_id');

            $table->boolean('featured')->default(0);
            $table->boolean('approved')->default(0);
            $table->boolean('trending')->default(0);
            $table->boolean('published')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
