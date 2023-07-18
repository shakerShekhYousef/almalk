<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InternalFeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('internal_features')->insert(
            [
                [
                    'name_ar' => 'ADSL',
                    'name_en' => 'ADSL', ],
                [
                    'name_ar' => 'إنذار (لص)',
                    'name_en' => 'Alarm(Thief)', ],
                [
                    'name_ar' => 'نجارة الألمنيوم',
                    'name_en' => 'Aluminium joinery', ],
                [
                    'name_ar' => 'بنيت في الفرن',
                    'name_en' => 'Built-in oven', ],
                [
                    'name_ar' => 'الأجهزة المنزلية',
                    'name_en' => 'Household appliances', ],
                [
                    'name_ar' => 'تبريد',
                    'name_en' => 'Refrigeration', ],
                [
                    'name_ar' => 'غرفة الغسيل',
                    'name_en' => 'Laundry room', ],
                [
                    'name_ar' => 'ورق الجدران',
                    'name_en' => 'Wallpaper', ],
                [
                    'name_ar' => 'إنترنت الألياف',
                    'name_en' => 'Fiber internet', ],
                [
                    'name_ar' => 'الاتصال الداخلي عبر الفيديو',
                    'name_en' => 'Video intercom', ],
                [
                    'name_ar' => 'قبو',
                    'name_en' => 'cellar', ],
                [
                    'name_ar' => 'صفح أرضية',
                    'name_en' => 'Laminate Floor', ],
                [
                    'name_ar' => 'المطبخ (مدمج)',
                    'name_en' => 'Kitchen(Built-in)', ],
                [
                    'name_ar' => 'الستائر',
                    'name_en' => 'Blinds', ],
                [
                    'name_ar' => 'أرضية سيراميك',
                    'name_en' => 'ceramic floor', ],
                [
                    'name_ar' => 'سخان الماء',
                    'name_en' => 'water heater', ],
                [
                    'name_ar' => 'التعرف على الوجه وبصمات الأصابع',
                    'name_en' => 'face recognition & Fingerprint', ],
                [
                    'name_ar' => 'الأعمال الخشبية',
                    'name_en' => 'woodwork', ],
                [
                    'name_ar' => 'إنذار (حريق)',
                    'name_en' => 'Alarm(fire)', ],
                [
                    'name_ar' => 'باب امريكي',
                    'name_en' => 'American Door', ],
                [
                    'name_ar' => 'رسم',
                    'name_en' => 'Painted', ],
                [
                    'name_ar' => 'آلة غسل',
                    'name_en' => 'Waching Machine', ],
                [
                    'name_ar' => 'باب حديد',
                    'name_en' => 'Steel door', ],
                [
                    'name_ar' => 'آلة ماجستير',
                    'name_en' => 'Master Machine', ],
                [
                    'name_ar' => 'غرفة الملابس',
                    'name_en' => 'Dressing room', ],
                [
                    'name_ar' => 'هيلتون بانيو',
                    'name_en' => 'Hilton Banyo', ],
                [
                    'name_ar' => 'جاكوسي',
                    'name_en' => 'Jakusi', ],
                [
                    'name_ar' => 'مناخ',
                    'name_en' => 'Climate', ],
                [
                    'name_ar' => 'مارلي',
                    'name_en' => 'Marley', ],
                [
                    'name_ar' => 'مطبخ (مصفح)',
                    'name_en' => 'Kitchen(Laminate)', ],
                [
                    'name_ar' => 'ارضية خشب مقوة',
                    'name_en' => 'Hardwood Floor', ],
                [
                    'name_ar' => 'كوكتوب طباخ',
                    'name_en' => 'Cooktop Cooker', ],
                [
                    'name_ar' => 'المدفأة',
                    'name_en' => 'Fireplace', ],
                [
                    'name_ar' => 'حجرة إيداع',
                    'name_en' => 'Cloakroom', ],
                [
                    'name_ar' => 'المنزل الذكي',
                    'name_en' => 'Smart House', ],
                [
                    'name_ar' => 'مرحاض تركي',
                    'name_en' => 'Turkish Toilet', ],
                [
                    'name_ar' => 'مطبخ أمريكي',
                    'name_en' => 'American Kitchen', ],
                [
                    'name_ar' => 'حفل شواء',
                    'name_en' => 'Barbecue', ],
                [
                    'name_ar' => 'غسالة صحون',
                    'name_en' => 'Dishwasher', ],
                [
                    'name_ar' => 'آلة الغسل',
                    'name_en' => 'waching machine', ],
                [
                    'name_ar' => 'حجرة استحمام',
                    'name_en' => 'Shower cabin', ],
                [
                    'name_ar' => 'مخبز',
                    'name_en' => 'Bakery', ],
                [
                    'name_ar' => 'خزانة',
                    'name_en' => 'Closet', ],
                [
                    'name_ar' => 'انتركم سيستم',
                    'name_en' => 'Intercom Sestem', ],
                [
                    'name_ar' => 'اللوح الجصي',
                    'name_en' => 'Plasterboard', ],
                [
                    'name_ar' => 'حوض الاستحمام',
                    'name_en' => 'Bathtub', ],
                [
                    'name_ar' => 'أثاث',
                    'name_en' => 'Furniture', ],
                [
                    'name_ar' => 'غاز المطبخ',
                    'name_en' => 'Kitchen Gas', ],
                [
                    'name_ar' => 'نجارة PVC',
                    'name_en' => 'PVC Joinery', ],
                [
                    'name_ar' => 'إضاءة موضعية',
                    'name_en' => 'Spot Lighting', ],
                [
                    'name_ar' => 'جوهر',
                    'name_en' => 'Core', ],
                [
                    'name_ar' => 'واي فاي',
                    'name_en' => 'Wi-Fi', ],

            ]);
    }
}
