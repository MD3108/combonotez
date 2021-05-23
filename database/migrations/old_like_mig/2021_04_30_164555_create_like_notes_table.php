<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_note', function (Blueprint $table) {
            $table->bigInteger('like_id')->unsigned();
            $table->bigInteger('note_id')->unsigned();
            $table->foreign('like_id')
                ->references('id')
                ->on('likes')
                ->onDelete(('cascade'));
            $table->foreign('note_id')
                ->references('id')
                ->on('notes')
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
        Schema::dropIfExists('like_notes');
    }
}
