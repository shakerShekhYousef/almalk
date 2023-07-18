<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('views')->insert(
            [
                [
                    'name_ar' => 'مدينة',
                    'name_en' => 'city', ],
                [
                    'name_ar' => 'هدف',
                    'name_en' => 'Goal', ],
                [
                    'name_ar' => 'حمام سباحة',
                    'name_en' => 'Pool', ],
                [
                    'name_ar' => 'طبيعة سجية',
                    'name_en' => 'Nature', ],
                [
                    'name_ar' => 'حديقة',
                    'name_en' => 'Park', ],

            ]);
    }
}
