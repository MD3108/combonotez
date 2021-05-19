<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_note', function (Blueprint $table) {
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('note_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
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
        Schema::dropIfExists('category_notes');
    }
}
