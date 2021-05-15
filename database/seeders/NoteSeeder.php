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
        Note::factory()->count(36)->create();
        
        foreach(Note::all() as $note){
            $fighters = Fighter::inRandomOrder()->take(rand(1,3))->pluck('id');
            $note->fighters()->attach($fighters);//, ['sort_key' => rand(1,3)]
        }

        foreach(Note::all() as $note){
            $categories = Category::inRandomOrder()->take(rand(1,5))->pluck('id');
            $note->categories()->attach($categories);
        }
        
    }
}
