<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(
            [

                [
                    'name_ar' => 'اليرموك',
                    'name_en' => 'Yarmouk',
                    'city_id' => 1,
                ],
                [
                    'name_ar' => 'الاندلس',
                    'name_en' => 'Andalusia',
                    'city_id' => 1,
                ],
                [
                    'name_ar' => 'شورش',
                    'name_en' => 'Shores',
                    'city_id' => 1,
                ],

            ]
        );
    }
}
