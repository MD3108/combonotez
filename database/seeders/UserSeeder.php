<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
//use Database\Seeders\Facades\DB;
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

        //DB::table('users')->insert([
        //    'name' => 'admin',
        //    'email' => 'admin@admin.com',
        //    'password' => Hash::make('admin'),
        //]);
        //DB::table('users')->insert([
        //    'name' => 'Daniel',
        //    'email' => 'pinho_daniel098@hotmail.fr',
        //    'password' => Hash::make('Daniel'),
        //]);
    }
}
