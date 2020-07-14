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
            $table->integer('sort')->nullable()->comment("排序");
            $table->string('title')->nullable()->comment("职位名称 文章标题");
            $table->longText('content')->nullable()->comment("职位描述 文章内容");
            $table->string('local')->nullable()->comment("工作地址 文章地址");
            $table->longText('company')->nullable()->comment("公司简介");

            $table->integer('create_id')->nullable()->comment("文章创建人");
            $table->string('create_name')->nullable()->comment("文章创建人");
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
