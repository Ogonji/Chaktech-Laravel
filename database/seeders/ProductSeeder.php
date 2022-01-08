<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'KARATASI',
                'price'=>'1000',
                'description'=>'Looks Good',
                'category'=>'Electronic',
                'gallery'=>'https://i.pinimg.com/736x/b7/58/1d/b7581d540612257db7211789d08e6fe4.jpg'
            ],
            [
                'name'=>'Samsung',
                'price'=>'1000',
                'description'=>'Looks Good',
                'category'=>'Electronic',
                'gallery'=>'https://mpng.subpng.com/20180620/piq/kisspng-samsung-computer-monitors-led-backlit-lcd-1080p-hi-tai-chi-fan-5b2aacd35e9297.2210510215295234113874.jpg'
            ],
            [
                'name'=>'Gaming Chair',
                'price'=>'1000',
                'description'=>'Looks Good',
                'category'=>'Electronic',
                'gallery'=>'https://toppng.com/uploads/preview/corsair-t1-race-gaming-chair-115309744380j86tda6lv.png'
            ],
            [
                'name'=>'wallpaper',
                'price'=>'1000',
                'description'=>'Looks Good',
                'category'=>'paper',
                'gallery'=>'https://cutewallpaper.org/21/marques-brownlee-wallpapers/CG-Sunset-in-2019-Minimalist-wallpaper-Minimal-wallpaper-.jpg'
            ]

        ]);
    }
}
