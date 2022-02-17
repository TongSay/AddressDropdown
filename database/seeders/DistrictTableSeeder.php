<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            [
                'id'             => 1,
                'name'           => 'Khan Russei Keo',
                'country_id'     => 1
            ],
            [
                'id'             => 2,
                'name'           => 'Khan Toulkok',
                'country_id'     => 1
            ],
            [
                'id'             => 3,
                'name'           => 'Khan 7 Makara',
                'country_id'     => 1
            ],
            [
                'id'             => 4,
                'name'           => 'Khan Por Senchey',
                'country_id'     => 1
            ],
            [
                'id'             => 5,
                'name'           => 'Khan Sen Sok',
                'country_id'     => 1
            ],
            [
                'id'             => 6,
                'name'           => 'Khan Boeng Keng Kang',
                'country_id'     => 1
            ],
            [
                'id'             => 7,
                'name'           => 'Khan Chamkarmorn',
                'country_id'     => 1
            ],
            [
                'id'             => 8,
                'name'           => 'Khan Meanchey',
                'country_id'     => 1
            ],
            [
                'id'             => 9,
                'name'           => 'Khan Dang Kor',
                'country_id'     => 1
            ],
            [
                'id'             => 10,
                'name'           => 'Khan Chba Ampoeu',
                'country_id'     => 1
            ],

            [
                'id'             => 11,
                'name'           => 'Khan Chroy Chang Va',
                'country_id'     => 1
            ],
            [
                'id'             => 12,
                'name'           => 'Khan Prek Phnov',
                'country_id'     => 1
            ],

// ========== Kandal ==========

            [
                'id'             => 13,
                'name'           => 'Angk Snuol',
                'country_id'     => 2
            ],
            [
                'id'             => 14,
                'name'           => 'Kandal Stueng',
                'country_id'     => 2
            ],
            [
                'id'             => 15,
                'name'           => 'Kaoh Thum',
                'country_id'     => 2
            ],
            [
                'id'             => 16,
                'name'           => 'Khsach Kandal',
                'country_id'     => 2
            ],
            [
                'id'             => 17,
                'name'           => 'Kien Svay',
                'country_id'     => 2
            ],
            [
                'id'             => 18,
                'name'           => 'Leuk Daek',
                'country_id'     => 2
            ],
            [
                'id'             => 19,
                'name'           => 'Lvea Aem',
                'country_id'     => 2
            ],
            [
                'id'             => 20,
                'name'           => 'Mukh Kampul ',
                'country_id'     => 2
            ],
            [
                'id'             => 21,
                'name'           => 'Ponhea Lueu',
                'country_id'     => 2
            ],
            [
                'id'             => 22,
                'name'           => 'S Ang District',
                'country_id'     => 2
            ],

            [
                'id'             => 23,
                'name'           => 'Ta Khmau Municipality',
                'country_id'     => 2
            ],
            
            
        ];

        DB::table('states')->insert($districts);
    }
}
