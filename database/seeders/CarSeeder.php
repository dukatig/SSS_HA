<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([

            'model'=>'Toyota_01',
            'year'=>'2020',
            'email'=>'g@yahoo.com',
            'manufacturer_id'=>1
        ]);

        DB::table('cars')->insert([

            'model'=>'Mazda_01',
            'year'=>'2021',
            'email'=>'s@yahoo.com',
            'manufacturer_id'=>2
        ]);

        DB::table('cars')->insert([

            'model'=>'Honda_01',
            'year'=>'2020',
            'email'=>'f@yahoo.com',
            'manufacturer_id'=>3
        ]);

        DB::table('cars')->insert([

            'model'=>'Toyota_02',
            'year'=>'2020',
            'email'=>'v@yahoo.com',
            'manufacturer_id'=>1
        ]);

        DB::table('cars')->insert([

            'model'=>'Toyota_03',
            'year'=>'2020',
            'email'=>'h@yahoo.com',
            'manufacturer_id'=>1
        ]);
    }
}
