<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // DB::table('users')->insert(['name'=>'Har','email'=>'habc@gmail.com','password'=>Hash::make('12345')]);
      User::create(['name'=>'abc','email'=>'abc@gmail.com','password'=>'12345']);
    }
}
