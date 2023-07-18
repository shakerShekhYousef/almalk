<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [

                [
                    'name_ar' => 'عقارات',
                    'name_en' => 'ُEstates',
                    'Table_name' => 'estates',
                ],
                [
                    'name_ar' => 'مركبات',
                    'name_en' => 'vehicles',
                    'Table_name' => 'estates',

                ],
                [
                    'name_ar' => 'قطع غيار , اكسسوارات',
                    'name_en' => 'Spare parts, accessories',
                    'Table_name' => 'estates',

                ],
                [
                    'name_ar' => 'شراء مستعملة وجديدة',
                    'name_en' => 'Used and New Buy',
                    'Table_name' => 'estates',

                ],
                [
                    'name_ar' => 'آلات البناء والصناعة ',
                    'name_en' => 'Construction and industry machinery',
                    'Table_name' => 'estates',

                ],
                [
                    'name_ar' => 'مدرسون خاصون',
                    'name_en' => 'private tutors',
                    'Table_name' => 'estates',

                ],
                [
                    'name_ar' => 'وظائف شاغرة',
                    'name_en' => 'vacancies',
                    'Table_name' => 'estates',

                ],
                [
                    'name_ar' => 'طالبي المساعدين',
                    'name_en' => 'Assistant seekers',
                    'Table_name' => 'estates',

                ],
                [
                    'name_ar' => 'مملكة الحيوان',
                    'name_en' => 'animal kingdom',
                    'Table_name' => 'estates',

                ],
            ]
        );
    }
}
