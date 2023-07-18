<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category_sub_type_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_sub_types')->insert(
            [
                [
                    'category_Sub_id' => '1',
                    'name_ar' => 'للبيع',
                    'name_en' => 'For sale',
                ],
                [
                    'category_Sub_id' => '1',
                    'name_ar' => 'للإيجار',
                    'name_en' => 'For rent',
                ],
                [
                    'category_Sub_id' => '1',
                    'name_ar' => 'الإيجار اليومي',
                    'name_en' => 'Daily rent',
                ],
                [
                    'category_Sub_id' => '1',
                    'name_ar' => 'إقامة للبيع عن طريق التحويل',
                    'name_en' => ' Residence For Sale By Transfer',
                ],
                //     [
                //         'category_Sub_id'  => '2',
                //         'name_ar' => 'للبيع',
                //         'name_en' => 'For sale',
                //     ],
                //     [
                //         'category_Sub_id'  => '2',
                //         'name_ar' => 'للإيجار',
                //         'name_en' => 'For rent',
                //     ],
                //     [
                //         'category_Sub_id'  => '2',
                //         'name_ar' => 'نقل للبيع',
                //         'name_en' => 'Transfer For Sale',
                //     ],
                //     [
                //         'category_Sub_id'  => '2',
                //         'name_ar' => 'عن طريق التحويل',
                //         'name_en' => 'By Transfer',
                //     ],
                //     [
                //         'category_Sub_id'  => '3',
                //         'name_ar' => 'للبيع',
                //         'name_en' => 'For sale',
                //     ],
                //     [
                //         'category_Sub_id'  => '3',
                //         'name_ar' => 'للإيجار',
                //         'name_en' => 'For rent',
                //     ],
                //     [
                //         'category_Sub_id'  => '4',
                //         'name_ar' => 'شقة',
                //         'name_en' => 'Apartment',
                //     ],
                //     [
                //         'category_Sub_id'  => '4',
                //         'name_ar' => 'مشاريع الإسكان',
                //         'name_en' => 'Housing projects',
                //     ],[
                //         'category_Sub_id'  => '4',
                //         'name_ar' => 'مسكن',
                //         'name_en' => 'Residence',
                //     ],
                //     [
                //         'category_Sub_id'  => '4',
                //         'name_ar' => 'المشاريع التجارية',
                //         'name_en' => 'Commercial Projects',
                //     ],
                //     [
                //         'category_Sub_id'  => '4',
                //         'name_ar' => 'فيلا',
                //         'name_en' => 'Villa',
                //     ],
                //     [
                //         'category_Sub_id'  => '5',
                //     'name_ar' => 'للبيع',
                //     'name_en' => 'For sale',
                //    ],
                // [
                //     'category_Sub_id'  => '5',
                //     'name_ar' => 'للإيجار',
                //     'name_en' => 'For rent',
                // ],
                // [
                //     'category_Sub_id'  => '6',
                //     'name_ar' => 'منطقة البحر الأبيض المتوسط',
                //     'name_en' => 'the Mediterranean region',
                // ],
                // [
                //     'category_Sub_id'  => '6',
                //     'name_ar' => 'منطقة الأناضول الشرقية',
                //     'name_en' => 'Eastern Anatolia Region',
                // ],
                // [
                //     'category_Sub_id'  => '6',
                //     'name_ar' => 'منطقة بحر ايجه',
                //     'name_en' => 'Aegean Region',
                // ],
                // [
                //     'category_Sub_id'  => '6',
                //     'name_ar' => 'منطقة جنوب شرق الأناضول',
                //     'name_en' => 'Southeast Anatolia Region',
                // ],
                // [
                //     'category_Sub_id'  => '6',
                //     'name_ar' => 'منطقة البحر الأسود',
                //     'name_en' => 'black Sea region',
                // ],
                // [
                //     'category_Sub_id'  => '6',
                //     'name_ar' => 'منطقة مرمرة',
                //     'name_en' => 'Marmara Region',
                // ],
                // [
                //     'category_Sub_id'  => '6',
                //     'name_ar' => 'قبرص',
                //     'name_en' => 'Cyprus',
                // ],
                // [
                //     'category_Sub_id'  => '6',
                //     'name_ar' => 'في الخارج',
                //     'name_en' => 'Abroad',
                // ],
                // [
                //     'category_Sub_id'  => '7',
                //     'name_ar' => 'للبيع',
                //     'name_en' => 'For sale',
                // ],
                // [
                //     'category_Sub_id'  => '7',
                //     'name_ar' => 'للإيجار',
                //     'name_en' => 'For rent',
                // ],

            ]);
    }
}
