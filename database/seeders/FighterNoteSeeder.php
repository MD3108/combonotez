<?php

namespace Database\Seeders;

use App\Models\FighterNote;
use Illuminate\Database\Seeder;

class FighterNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FighterNote::create([
            'fighter_id' => 1,
            'note_id' => 1,
        ]);
        FighterNote::create([
            'fighter_id' => 2,
            'note_id' => 1,
        ]);
        FighterNote::create([
            'fighter_id' => 3,
            'note_id' => 1,
        ]);
    }
}
