<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoriteNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_note', function (Blueprint $table) {
            $table->bigInteger('favorite_id')->unsigned();
            $table->bigInteger('note_id')->unsigned();
            $table->foreign('favorite_id')
                ->references('id')
                ->on('favorites')
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
        Schema::dropIfExists('favorite_notes');
    }
}
