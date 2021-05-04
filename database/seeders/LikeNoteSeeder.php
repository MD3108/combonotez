<?php

namespace Database\Seeders;

use App\Models\LikeNote;
use Illuminate\Database\Seeder;

class LikeNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LikeNote::create([
            'like_id' => 1,
            'note_id' => 1,
        ]);
        LikeNote::create([
            'like_id' => 2,
            'note_id' => 1,
        ]);
    }
}
