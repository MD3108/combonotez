<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFighterNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fighter_note', function (Blueprint $table) {
            $table->bigInteger('fighter_id')->unsigned();
            $table->bigInteger('note_id')->unsigned();
            $table->foreign('fighter_id')
                ->references('id')
                ->on('fighters')
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
        Schema::dropIfExists('fighter_notes');
    }
}
