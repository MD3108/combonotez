<?php

namespace Database\Seeders;

use App\Models\CategoryNote;
use Illuminate\Database\Seeder;

class CategoryNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryNote::create([
            'category_id' => '2',
            'note_id' => '1',
        ]);
    }
}
