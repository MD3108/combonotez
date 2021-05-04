<?php

namespace Database\Seeders;

use App\Models\FavoriteNote;
use Illuminate\Database\Seeder;

class FavoriteNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FavoriteNote::create([
            'favorite_id' => 1,
            'note_id' => 1,
        ]);
    }
}
