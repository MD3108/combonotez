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
    }
}
