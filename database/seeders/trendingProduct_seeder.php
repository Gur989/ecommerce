<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\trendingProducts;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class trendingProduct_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('trending_Products')->insert([['name'=>'Smartphone',
       'price'=>'$500',
       'gallery'=>'images/amazonphone.jpg'
],['name'=>'Pans',
       'price'=>'$90',
       'gallery'=>'images/amazonpans.jpg'],
       ['name'=>'vaccum',
       'price'=>'$200',
       'gallery'=>'images/Amazonvaccum.jpg'],
       ['name'=>'Smartphone',
       'price'=>'$600',
       'gallery'=>'images/img1.jpg']]);
    }
}
