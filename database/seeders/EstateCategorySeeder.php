<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estate_categories')->insert([
            [
                'name_ar' => 'الإسكان',
                'name_en' => 'Housing',
                'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',
            ],
            [
                'name_ar' => 'مكان العمل',
                'name_en' => 'Workplace',
                'property_id' => '[15]',
            ],
            [
                'name_ar' => 'حبكة',
                'name_en' => 'Plot',
                'property_id' => '[]',
            ],
            [
                'name_ar' => 'مشاريع الإسكان',
                'name_en' => 'Housing projects',
                'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',
            ],
            [
                'name_ar' => 'بالوقت',
                'name_en' => 'Timeshare ',
                'property_id' => '[]',
            ],
            [
                'name_ar' => 'بينا',
                'name_en' => 'Bina ',
                'property_id' => '[]',
            ],
            [
                '   name_ar' => 'مرفق سياحي',
                'name_en' => 'Tourist Facility',
                'property_id' => '[]',
            ],        ]);
    }
}
