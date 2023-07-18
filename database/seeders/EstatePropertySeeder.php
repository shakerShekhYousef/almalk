<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatePropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estate_properties')->insert(
            [
                [
                    'name_ar' => 'عدد الغرف',
                    'name_en' => 'Number of rooms',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'عمر البناء',
                    'name_en' => 'Building Age',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'موقع الطابق',
                    'name_en' => 'Floor location',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'عدد الطوابق',
                    'name_en' => 'Number of Floors',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'تدفئة',
                    'name_en' => 'Heating',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'عدد الحمامات',
                    'name_en' => 'Number of bathrooms',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'شرفة',
                    'name_en' => 'balcony',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'مفروشة، مد، زود',
                    'name_en' => 'Furnished',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'باستخدام الحالة',
                    'name_en' => 'Using status',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'داخل الموقع',
                    'name_en' => 'Inside the Site',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'متاح للقرض',
                    'name_en' => 'Available for Loan',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'حالة سند الملكية',
                    'name_en' => 'Title Deed Status',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'من من',
                    'name_en' => 'From who',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'قابل للملاحة بمكالمات الفيديو',
                    'name_en' => 'Navigable with Video Call',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'المقايضة',
                    'name_en' => 'bartered',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'تاريخ الإدراج',
                    'name_en' => 'Listing Date',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => 'عدد القاعات',
                    'name_en' => 'Number of Halls',
                    'category_id' => 1,

                ],
                [
                    'name_ar' => 'نوع الهيكل',
                    'name_en' => 'Structure Type',
                    'category_id' => 1,
                ],
                [
                    'name_ar' => ' حالة المبنى',
                    'name_en' => 'ٍState of the Building',
                    'category_id' => 1,
                ],

            ]);
    }
}
