<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('environments')->insert(
            [
                [
                    'name_ar' => 'المول',
                    'name_en' => 'The mall', ],
                [
                    'name_ar' => 'جميفي',
                    'name_en' => 'Djemevi', ],
                [
                    'name_ar' => 'مركز ترفيهي',
                    'name_en' => 'Amusement center', ],
                [
                    'name_ar' => 'هافرا',
                    'name_en' => 'Havra', ],
                [
                    'name_ar' => 'الكنيسة',
                    'name_en' => 'The church', ],
                [
                    'name_ar' => 'حديقة',
                    'name_en' => 'Park', ],
                [
                    'name_ar' => 'سوق الجوار',
                    'name_en' => 'Neighborhood Market', ],
                [
                    'name_ar' => 'جامعة',
                    'name_en' => 'University', ],
                [
                    'name_ar' => 'مجلس',
                    'name_en' => 'Council', ],
                [
                    'name_ar' => 'بجانب شاطئ البحر',
                    'name_en' => 'Next to sea shore', ],
                [
                    'name_ar' => 'البرد',
                    'name_en' => 'Cold', ],
                [
                    'name_ar' => 'المدرسة الابتدائية - المدرسة المتوسطة',
                    'name_en' => 'Primary School-Middle School', ],
                [
                    'name_ar' => 'ليز',
                    'name_en' => 'Lise', ],
                [
                    'name_ar' => 'قسم الامن',
                    'name_en' => 'Police station', ],
                [
                    'name_ar' => 'نادي رياضي',
                    'name_en' => 'Gym', ],
                [
                    'name_ar' => 'كامي',
                    'name_en' => 'Cami', ],
                [
                    'name_ar' => 'مقابل',
                    'name_en' => 'Pharmacy', ],
                [
                    'name_ar' => 'مستشفى',
                    'name_en' => 'Hospital', ],
                [
                    'name_ar' => 'قسم الأطفاء',
                    'name_en' => 'Fire Department', ],
                [
                    'name_ar' => 'سوق',
                    'name_en' => 'Market', ],
                [
                    'name_ar' => 'العيادة الصحية',
                    'name_en' => 'The health clinic', ],
                [
                    'name_ar' => 'مركز المدينة',
                    'name_en' => 'Town center', ],

            ]);
    }
}
