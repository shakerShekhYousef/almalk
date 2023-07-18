<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category_sub_type_det_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_sub_type_dets')->insert(
            [
                [
                    'category_Sub_type_id' => '1',
                    'name_ar' => 'شقة',
                    'name_en' => 'Apartment',
                ],
                [
                    'category_Sub_type_id' => '1',
                    'name_ar' => 'مسكن',
                    'name_en' => 'Residence',
                ],
                [
                    'category_Sub_type_id' => '1',
                    'name_ar' => 'بيت مستقل',
                    'name_en' => 'Detached house',
                ],
                [
                    'category_Sub_type_id' => '1',
                    'name_ar' => 'فيلا',
                    'name_en' => 'Villa',
                ],
                [
                    'category_Sub_type_id' => '1',
                    'name_ar' => 'بيت ريفي',
                    'name_en' => 'Farm house',
                ],
                [
                    'category_Sub_type_id' => '1',
                    'name_ar' => 'القصر والقصر',
                    'name_en' => 'Mansion & Mansion',
                ],
                [
                    'category_Sub_type_id' => '1',
                    'name_ar' => 'جانب الماء',
                    'name_en' => 'Water side',
                ],
                [
                    'category_Sub_type_id' => '1',
                    'name_ar' => 'شقة القصر',
                    'name_en' => 'Mansion Apartment',
                ],
                [
                    'category_Sub_type_id' => '1',
                    'name_ar' => 'صيفي',
                    'name_en' => 'Summary',
                ],
                [
                    'category_Sub_type_id' => '1',
                    'name_ar' => 'بيت جاهز',
                    'name_en' => 'Prefabricated house',
                ],
                [
                    'category_Sub_type_id' => '1',
                    'name_ar' => 'تعاوني',
                    'name_en' => 'cooperative',
                ],
            ]);
    }
}
