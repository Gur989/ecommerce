<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\product;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('products')->insert([
            ["name"=>"Branded phone",
            "price"=>"17000",
            "category"=>"A1-Grade",
            "gallery"=>"images/img1.jpg",
            "Description"=>"Made in India"],
           
        ]);
//   product::insert();
    }
}
