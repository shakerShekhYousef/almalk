<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HousingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('housing_types')->insert(
            [
                [
                    'name_ar' => 'الشكل كات',
                    'name_en' => 'Figure Kat', ],
                [
                    'name_ar' => 'أرضية الحديقة',
                    'name_en' => 'Garden Floor', ],
                [
                    'name_ar' => 'الطابق العلوي',
                    'name_en' => 'Top floor', ],
                [
                    'name_ar' => 'أرضية المدخل',
                    'name_en' => 'Entrance floor', ],
                [
                    'name_ar' => 'عكس الازدواج',
                    'name_en' => 'Reverse Duplex', ],
                [
                    'name_ar' => 'الميزانين دوبلكس',
                    'name_en' => 'Mezzanine Duplex', ],
                [
                    'name_ar' => 'بهجلي',
                    'name_en' => 'Bahceli', ],
                [
                    'name_ar' => 'للمتعة',
                    'name_en' => 'For Fun', ],
                [
                    'name_ar' => 'دوبلكس ارضي',
                    'name_en' => 'Floor Duplex', ],
                [
                    'name_ar' => 'ثلاثي',
                    'name_en' => 'Triplex', ],
                [
                    'name_ar' => 'دوبلكس بحديقة',
                    'name_en' => 'Garden Duplex', ],
                [
                    'name_ar' => 'دوبلكس على السطح',
                    'name_en' => 'Roof Duplex', ],
                [
                    'name_ar' => 'جراج / فوق محل',
                    'name_en' => 'Garage / Above Shop', ],
                [
                    'name_ar' => 'دخول منفصل',
                    'name_en' => 'Detached Entry', ],
                [
                    'name_ar' => 'الطابق الأرضي',
                    'name_en' => 'Ground floor', ],

            ]);
    }
}
