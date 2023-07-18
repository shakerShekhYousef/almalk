<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExteriorFeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exterior_features')->insert(
            [
                [
                    'name_ar' => 'أمن على مدار 24 ساعة',
                    'name_en' => '24 Hour Security', ],
                [
                    'name_ar' => 'ملعب للأطفال',
                    'name_en' => 'Childrens Playground', ],
                [
                    'name_ar' => 'العزل الحراري',
                    'name_en' => 'Thermal insulation', ],
                [
                    'name_ar' => 'نظام الكاميرا',
                    'name_en' => 'Camera System', ],
                [
                    'name_ar' => 'مسبح خاص',
                    'name_en' => 'Private Pool', ],
                [
                    'name_ar' => 'ساونا',
                    'name_en' => 'Sauna', ],
                [
                    'name_ar' => 'مجال الرياضة',
                    'name_en' => 'Sports Field', ],
                [
                    'name_ar' => 'الأقمار الصناعية',
                    'name_en' => 'Satellite', ],
                [
                    'name_ar' => 'حوض سباحة (داخلي)',
                    'name_en' => 'Swimming Pool (Indoor)', ],
                [
                    'name_ar' => 'يرفع',
                    'name_en' => 'Lift', ],
                [
                    'name_ar' => 'دوره المياه',
                    'name_en' => 'Bathroom', ],
                [
                    'name_ar' => 'مولد كهرباء',
                    'name_en' => 'Generator', ],
                [
                    'name_ar' => 'بواب',
                    'name_en' => 'Doorman', ],
                [
                    'name_ar' => 'وقوف السيارات مفتوح',
                    'name_en' => 'Parking-Open', ],
                [
                    'name_ar' => 'عزل الصوت',
                    'name_en' => 'Sound insulation', ],
                [
                    'name_ar' => 'خزان المياه',
                    'name_en' => 'Water tank', ],
                [
                    'name_ar' => 'سلم النجاة',
                    'name_en' => 'Fire escape', ],
                [
                    'name_ar' => 'غرفة البخار',
                    'name_en' => 'Steam room', ],
                [
                    'name_ar' => 'مائي',
                    'name_en' => 'hydrophore', ],
                [
                    'name_ar' => 'الكيبل التلفزيوني',
                    'name_en' => 'Cable TV', ],
                [
                    'name_ar' => 'حضانة',
                    'name_en' => 'Nursery', ],
                [
                    'name_ar' => 'وقوف السيارات مغلق',
                    'name_en' => 'Parking-Closed', ],
                [
                    'name_ar' => 'انحياز',
                    'name_en' => 'Siding', ],
                [
                    'name_ar' => 'أبقى المحكمة',
                    'name_en' => 'Kept Court', ],
                [
                    'name_ar' => 'حمام سباحة (خارجي)',
                    'name_en' => 'Swimming Pool(outdoor)', ],

            ]);
    }
}
