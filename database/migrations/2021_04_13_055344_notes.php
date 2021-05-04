<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table){
            $table->id();

            //-- Main --//
            $table->string('name', 45);
            // ! return this to $table->json('notation')
            //$table->json('notation')->nullable();

            $table->enum('assistOne', ['A', 'B', 'C']);
            $table->enum('assistTwo', ['A', 'B', 'C']);

            //-- Détails --//
            $table->integer('damage');
            $table->float('ki_start', 3, 2);
            $table->float('ki_end', 3, 2);
            $table->enum('difficulty', ['easy', 'average', 'hard', 'expert']);
            $table->string('youtube_url')->nullable();

            //-- User --//
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            //-- Fighters --//
            //$table->unsignedInteger('fighter_id');
            //$table->foreign('fighter_id')->references('id')->on('fighters');
            

            //-- Creation date info --//
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
        //
    }
}
