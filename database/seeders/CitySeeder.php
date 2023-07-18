<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(
            [

                [
                    'name_ar' => 'بغداد',
                    'name_en' => 'Baghdad',
                    'country_id' => 1,
                ],
                [
                    'name_ar' => 'البصرى',
                    'name_en' => 'AlBasrah',
                    'country_id' => 1,
                ],
                [
                    'name_ar' => 'أربيل',
                    'name_en' => 'Erbil',
                    'country_id' => 1,
                ],

            ]
        );
    }
}
