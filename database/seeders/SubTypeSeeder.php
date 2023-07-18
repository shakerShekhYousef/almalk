<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_types')->insert(
            [

                [
                    'name_ar' => 'a1',
                    'name_en' => 'A1',
                    'category_id' => 1,
                ],

            ]
        );
    }
}
