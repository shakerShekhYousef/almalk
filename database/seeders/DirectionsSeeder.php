<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directions')->insert(
            [
                [
                    'name_ar' => 'جنوب',
                    'name_en' => 'South',
                ],
                [
                    'name_ar' => 'شمال',
                    'name_en' => 'north',
                ],
                [
                    'name_ar' => 'شرق',
                    'name_en' => 'east',
                ],
                [
                    'name_ar' => 'غرب',
                    'name_en' => 'West',
                ],

            ]);
    }
}
