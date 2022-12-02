<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Sumsung-galaxy',
                'price'=>'15000',
                'description'=>' Free to Use High-quality videos and images from Pexels',
                'category'=>'Mobile',
                'gallery'=>'https://vedroid.com/img/smartphones/samsung-galaxy-trend-ii-duos-s7572/01.jpg'
            ],
            [
                'name'=>'S',
                'price'=>'18000',
                'description'=>' wallpapers to download for free. You can also upload and share your favorite Apple laptop HD 4k wallpapers. HD wallpapers and background images',
                'category'=>'mobile',
                'gallery'=>'https://i.pinimg.com/736x/c3/0b/e4/c30be4e907b9be066fe2ad80f67779f8--cell-phones-for-sale-galaxy-samsung.jpg'
            ],
            [
                'name'=>'Apple Laptop',
                'price'=>'150000',
                'description'=>'Tons of awesome Apple laptop HD 4k',
                'category'=>'laptop',
                'gallery'=>'https://sm.pcmag.com/pcmag_ap/photo/t/timeless-e/timeless-exterior_uzje.jpg'
            ]
        ]);
        
    }
}
