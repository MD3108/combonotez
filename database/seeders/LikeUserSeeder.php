<?php

namespace Database\Seeders;

use App\Models\LikeUser;
use Illuminate\Database\Seeder;

class LikeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LikeUser::create([
            'like_id' => 1, 
            'user_id' => 1, 
        ]);
        LikeUser::create([
            'like_id' => 1, 
            'user_id' => 2, 
        ]);
    }
}
