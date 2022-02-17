<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'id'             => 1,
                'name'           => 'Phom Penh',  
            ],
            [
                'id'             => 2,
                'name'           => 'Kandal',  
            ],
        ];

        DB::table('countries')->insert($cities);

        
    }
}
