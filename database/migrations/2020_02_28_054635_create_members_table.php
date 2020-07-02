<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login_name')->unique();
            $table->string('members_name')->nullable()->comment("用户名");
            $table->string('ipone')->nullable()->comment("ipone");
            $table->string('email')->nullable()->comment("email");
            $table->string('password');
            $table->string('session_id',255)->default(''); //sessionid
            $table->rememberToken();
            $table->tinyInteger('status')->default(1)->comment('状态');
            $table->tinyInteger('p_id')->nullable("")->comment('父级id');
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
        Schema::dropIfExists('members');
    }
}
