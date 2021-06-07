<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_user', function (Blueprint $table) {
            $table->bigInteger('like_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('like_id')
                ->references('id')
                ->on('likes')
                ->onDelete(('cascade'));
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete(('cascade'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_users');
    }
}
