<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        for($i=0 ; $i < 30; $i++){
            $like = new Like();

            $like->user_id = User::all()->random(1)->first()->id;
            $like->note_id = Note::all()->random(1)->first()->id;

            $like->save();
        }*/
        /*
        Like::create([
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Like::create([
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        */
    }
}
