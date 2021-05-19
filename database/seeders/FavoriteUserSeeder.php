<?php

namespace Database\Seeders;

use App\Models\FavoriteUser;
use Illuminate\Database\Seeder;

class FavoriteUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FavoriteUser::create([
            'favorite_id' => 1,
            'user_id' => 1,
        ]);
    }
}
