<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_logs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->tinyInteger('type_id')->default(1);                 // 日志类型  0 手动  1 自动
            $table->integer('users_id');                                // 管理员ID
            $table->string('username', 64);                           // 管理员账号
            $table->string('client_ip', 64)->default('');               // 客户端IP
            $table->string('proxy_ip', 64)->default('');                // 代理IP

            $table->string('request_url', 128)->default('');            // 请求路径地址
            $table->string('request_content', 1024)->default('');       // 请求内容

            $table->string('controller', 64)->default('');              // 控制器
            $table->string('action', 64)->default('');                  // 动作

            $table->tinyInteger('status')->default(1);                  // 1 访问成功　 0 访问不成功
            $table->string('title', 1024)->default('');                 // 日志标题
            $table->text('content');                       // 日志详情

            $table->index('users_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_logs');
    }
}
