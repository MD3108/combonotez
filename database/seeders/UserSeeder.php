<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([  
            'id' => 1 ,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => null,
            'password' => Hash::make('admin'),
        ]);
        User::create([  
            'id' => 2,
            'name' => 'random',
            'email' => 'random@random.com',
            'email_verified_at' => null,
            'password' => Hash::make('random'),
        ]);
        User::create([  
            'id' => 3,
            'name' => 'admin',
            'email' => 'admin@heaj.be',
            'email_verified_at' => null,
            'password' => Hash::make('admin'),
        ]);
    }
}
