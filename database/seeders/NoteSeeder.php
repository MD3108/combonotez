<?php

namespace Database\Seeders;


use App\Models\Note;
use Illuminate\Database\Seeder;
use Database\Seeders\factory;
use App\Models\Fighter;
use App\Models\Category;

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

        foreach(Note::all() as $note){
            $categories = Category::inRandomOrder()->take(rand(1,5))->pluck('id');
            $note->categories()->sync($categories);
        }
        
    }
}
