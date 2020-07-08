<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('posts_id')->nullable();
            $table->string('title')->nullable()->comment("职位名称 文章标题");
            $table->longText('content')->nullable()->comment("职位描述 文章内容");
            $table->string('local')->nullable()->comment("工作地址 文章地址");
            $table->string('image')->nullable()->comment("公司环境 文章地址");
            $table->string('company')->nullable()->comment("公司名称");
            $table->timestamps();
            $table->index('posts_id');
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
