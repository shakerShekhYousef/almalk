<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
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
                    'name_ar' => 'العقارات',
                    'name_en' => 'Real estate', ],

                [
                    'name_ar' => 'عربة',
                    'name_en' => 'trolley', ],

                [
                    'name_ar' => 'قطع غيار ، اكسسوارات ، ...',
                    'name_en' => 'Spare parts, accessories, ...', ],

                [
                    'name_ar' => 'شراء مستعملة وجديدة ...',
                    'name_en' => 'Buying new and used...', ],

                [
                    'name_ar' => 'آلات البناء والصناعة',
                    'name_en' => 'Construction and industry machinery', ],

                [
                    'name_ar' => 'مدرسون خاصون',
                    'name_en' => 'private tutors', ],

                [
                    'name_ar' => 'وظائف شاغرة',
                    'name_en' => 'vacancies', ],

                [
                    'name_ar' => 'طالبي المساعدين',
                    'name_en' => 'Assistant seekers', ],

                [
                    'name_ar' => 'مملكة الحيوان',
                    'name_en' => 'animal kingdom', ],

            ]);
    }
}
