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
                'name'=>'Xiomi Smartphone',
                'price'=>'1100',
                'description' => "Brand new xiomi smarphone with awesome features",
                'category'=>"Electronics",
                'gallery'=>"https://www.gizmochina.com/wp-content/uploads/2019/02/Xiaomi-Mi-9-1.jpg"
            ],

            [
                'name'=>'Smart TV',
                'price'=>'3200',
                'description' => "Smart TV with many features",
                'category'=>"Electronics",
                'gallery'=>"https://5.imimg.com/data5/LW/IP/AG/SELLER-47616313/40-smart-4k-ready-led-tv-500x500.jpeg"
            ],

            [
                'name'=>'Tab X',
                'price'=>'600',
                'description' => "Tablet Galaxy A6 high performance",
                'category'=>"Electronics",
                'gallery'=>"https://hnsgsfp.imgix.net/9/images/detailed/56/Samsung_Galaxy_Tab_A7_10.4-inch_WiFi_Android_Tablet-_Dark_Gray_(IMG_1).jpg?fit=fill&bg=0FFF&w=1536&h=900&auto=format,compress"
            ],

            [
                'name'=>'Watch Smart v.2',
                'price'=>'500',
                'description' => "Awesome smart watch",
                'category'=>"Electronics",
                'gallery'=>"https://images-na.ssl-images-amazon.com/images/I/51OM%2BoAiKJL._AC_UL1000_.jpg"
            ]
        ]);
    }
}
