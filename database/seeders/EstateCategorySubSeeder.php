<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstateCategorySubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estate_category_subs')->insert(
            [
                [
                    'Estate_Category_id' => '1',
                    'name_ar' => 'للبيع',
                    'name_en' => 'For sale',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',
                ],
                [
                    'Estate_Category_id' => '1',
                    'name_ar' => 'للإيجار',
                    'name_en' => 'For rent',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '1',
                    'name_ar' => 'الإيجار اليومي',
                    'name_en' => 'Daily rent',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '1',
                    'name_ar' => 'إقامة للبيع عن طريق التحويل',
                    'name_en' => ' Residence For Sale By Transfer',
                    'property_id' => '[]',

                ],
                [
                    'Estate_Category_id' => '2',
                    'name_ar' => 'للبيع',
                    'name_en' => 'For sale',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '2',
                    'name_ar' => 'للإيجار',
                    'name_en' => 'For rent',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '2',
                    'name_ar' => 'نقل للبيع',
                    'name_en' => 'Transfer For Sale',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '2',
                    'name_ar' => 'عن طريق التحويل',
                    'name_en' => 'By Transfer',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '3',
                    'name_ar' => 'للبيع',
                    'name_en' => 'For sale',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '3',
                    'name_ar' => 'للإيجار',
                    'name_en' => 'For rent',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '4',
                    'name_ar' => 'شقة',
                    'name_en' => 'Apartment',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '4',
                    'name_ar' => 'مشاريع الإسكان',
                    'name_en' => 'Housing projects',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ], [
                    'Estate_Category_id' => '4',
                    'name_ar' => 'مسكن',
                    'name_en' => 'Residence',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '4',
                    'name_ar' => 'المشاريع التجارية',
                    'name_en' => 'Commercial Projects',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '4',
                    'name_ar' => 'فيلا',
                    'name_en' => 'Villa',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '5',
                    'name_ar' => 'للبيع',
                    'name_en' => 'For sale',        'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '5',
                    'name_ar' => 'للإيجار',
                    'name_en' => 'For rent',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '6',
                    'name_ar' => 'منطقة البحر الأبيض المتوسط',
                    'name_en' => 'the Mediterranean region',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '6',
                    'name_ar' => 'منطقة الأناضول الشرقية',
                    'name_en' => 'Eastern Anatolia Region',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '6',
                    'name_ar' => 'منطقة بحر ايجه',
                    'name_en' => 'Aegean Region',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '6',
                    'name_ar' => 'منطقة جنوب شرق الأناضول',
                    'name_en' => 'Southeast Anatolia Region',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '6',
                    'name_ar' => 'منطقة البحر الأسود',
                    'name_en' => 'black Sea region',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '6',
                    'name_ar' => 'منطقة مرمرة',
                    'name_en' => 'Marmara Region',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '6',
                    'name_ar' => 'قبرص',
                    'name_en' => 'Cyprus',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '6',
                    'name_ar' => 'في الخارج',
                    'name_en' => 'Abroad',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '7',
                    'name_ar' => 'للبيع',
                    'name_en' => 'For sale',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],
                [
                    'Estate_Category_id' => '7',
                    'name_ar' => 'للإيجار',
                    'name_en' => 'For rent',
                    'property_id' => '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]',

                ],

            ]);
    }
}
