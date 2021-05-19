<?php

namespace Database\Seeders;

use App\Models\Fighter;
use Illuminate\Database\Seeder;

class FighterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // * 1 to 10 //

        Fighter::create([
            'name' => 'SSJ Goku',
            'image_path' => '/images/fighters/ssj-goku.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'SSJ Vegeta',
            'image_path' => '/images/fighters/ssj-vegeta.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'SSJ Trunks',
            'image_path' => '/images/fighters/ssj-trunks.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Gohan (Teen)',
            'image_path' => '/images/fighters/gohan-teen.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Freezer',
            'image_path' => '/images/fighters/freezer.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Majin Buu',
            'image_path' => '/images/fighters/majin-buu.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Cell',
            'image_path' => '/images/fighters/cell.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Krillin',
            'image_path' => '/images/fighters/krillin.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Piccolo',
            'image_path' => '/images/fighters/piccolo.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Android 16',
            'image_path' => '/images/fighters/android_16.png',
            //'assist' => null,
        ]);

        // * 11 to 20 //
        Fighter::create([
            'name' => 'Android 18',
            'image_path' => '/images/fighters/android-18.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'SSB Goku',
            'image_path' => '/images/fighters/ssb-goku.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'SSB Vegeta',
            'image_path' => '/images/fighters/ssb-vegeta.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Yamcha',
            'image_path' => '/images/fighters/yamcha.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Tien Shinhan',
            'image_path' => '/images/fighters/tien-shinhan.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Nappa',
            'image_path' => '/images/fighters/nappa.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Ginyu',
            'image_path' => '/images/fighters/ginyu.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Gotenks',
            'image_path' => '/images/fighters/gotenks.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Gohan (Adult)',
            'image_path' => '/images/fighters/gohan-adult.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Kid Buu',
            'image_path' => '/images/fighters/kid-buu.png',
            //'assist' => null,
        ]);

        // * 21 to 30 //
        Fighter::create([
            'name' => 'Beerus',
            'image_path' => '/images/fighters/beerus.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Hit',
            'image_path' => '/images/fighters/hit.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Goku Black',
            'image_path' => '/images/fighters/goku-black.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Android 21',
            'image_path' => '/images/fighters/android-21.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Bardock',
            'image_path' => '/images/fighters/bardock.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Broly',
            'image_path' => '/images/fighters/broly.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Zamasu',
            'image_path' => '/images/fighters/zamasu.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'SSB Vegeto',
            'image_path' => '/images/fighters/ssb-vegeto.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Goku',
            'image_path' => '/images/fighters/goku.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Vegeta',
            'image_path' => '/images/fighters/vegeta.png',
            //'assist' => null,
        ]);

        // * 31 to 40 //
        Fighter::create([
            'name' => 'Cooler',
            'image_path' => '/images/fighters/cooler.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Android 17',
            'image_path' => '/images/fighters/android-17.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Jiren',
            'image_path' => '/images/fighters/jiren.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Videl',
            'image_path' => '/images/fighters/videl.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Goku GT',
            'image_path' => '/images/fighters/goku-gt.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Janemba',
            'image_path' => '/images/fighters/janemba.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'SSB Gogeta',
            'image_path' => '/images/fighters/ssb-gogeta.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Broly (Super)',
            'image_path' => '/images/fighters/broly-super.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Kefla',
            'image_path' => '/images/fighters/Kefla.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'UI Goku',
            'image_path' => '/images/fighters/ui-goku.png',
            //'assist' => null,
        ]);
        
        // * 41 to 43 //
        Fighter::create([
            'name' => 'Master Roshi',
            'image_path' => '/images/fighters/master-roshi.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'Super Baby 2',
            'image_path' => '/images/fighters/super-baby-2.png',
            //'assist' => null,
        ]);
        Fighter::create([
            'name' => 'SSJ4 Gogeta',
            'image_path' => '/images/fighters/ssj4-gogeta.png',
            //'assist' => null,
        ]);
        //-- DBFZ Fighters --//
    }
}
