<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[];

        for ($i = 1; $i < 1001; $i++) {
       DB::table("products")->insert([
        'name'=> fake()->text(),
        'phone'=> fake()->text(10),
        'email'=> fake()->email(),
        'is_trening'=>rand(0,1) 

        ]);
        DB::table('custommers')->insert($data);
    }
    }
}
