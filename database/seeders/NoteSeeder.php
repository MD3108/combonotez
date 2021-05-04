<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;
use Database\Seeders\factory;
use App\Models\Fighter;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::factory()->count(24)->create();
        
        foreach(Note::all() as $note){
            $fighters = Fighter::inRandomOrder()->take(rand(1,43))->pluck('id');
            $note->fighters()->sync($fighters);
        }
        
        //$fighters = Fighter::all();
        //Note::all()->each(function ($note) use ($fighters){
        //    $note->fighters()->attach(
        //        $fighters->random(rand(1,43))->pluck('id')->toArray()
        //    );
        //});

        //Note::create([
        //    //-- Main --//
        //    'name' => 'My first Combo Note',
        //    // ! add it later -->  :   'notation' => '{ "array": [ "2xL", "2xM", "2xH"] }' ,
        //    'assistOne' => 'A',
        //    'assistTwo' => 'B',
        //    //-- Fighters --//
        //    
        //    //-- Détails --//
        //    'damage' => 2620,
        //    'ki_start' => 0,
        //    'ki_end' => 0.5,
        //    'difficulty' => 'easy',
        //    //placeholder https://www.youtube.com/embed/
        //    'youtube_url' => 'https://www.youtube.com/embed/IK68AZ87mRU',
        //    //-- User --//
        //    'user_id' => 1,
        //]);
    }
}
