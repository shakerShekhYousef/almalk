<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category_Sub_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_subs')->insert(
            [

                [
                    'Category_id' => '1',
                    'name_ar' => 'الإسكان',
                    'name_en' => 'Housing',
                ],
                [
                    'Category_id' => '1',
                    'name_ar' => ' مكان العمل',
                    'name_en' => 'Workplace Plot ',
                ],
                [
                    'Category_id' => '1',
                    'name_ar' => 'مشاريع الإسكان',
                    'name_en' => 'Housing projects',
                ],
                [
                    'Category_id' => '1',
                    'name_ar' => 'بينا بالوقت',
                    'name_en' => 'Bina Timeshare ',
                ],
                [
                    'Category_id' => '1',
                    'name_ar' => 'مرفق سياحي',
                    'name_en' => 'Tourist Facility',
                ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'سيارات',
                //     'name_en' => 'Car',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'أرازي ، سيارة دفع رباعي وبيك أب',
                //     'name_en' => 'Arazi, SUV & Pickup car',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'دراجة نارية',
                //     'name_en' => 'Motorcycle',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'الميني فان والشاحنات الصغيرة',
                //     'name_en' => 'Minivans & Panel vans',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'تجاري',
                //     'name_en' => 'Commercial ',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'مركبات',
                //     'name_en' => 'vehicles ',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'سيارة كهربائية',
                //     'name_en' => 'Electric Vehicles ',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'تأجير المركبات',
                //     'name_en' => 'Rental Vehicles ',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'المركبات البحرية',
                //     'name_en' => 'Marine vehicles',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'تالف',
                //     'name_en' => 'Damaged ',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'أدوات كلاسيكية',
                //     'name_en' => 'Classic Tools ',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'المركبات المعدلة',
                //     'name_en' => 'Modified Vehicles',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'الطائرات',
                //     'name_en' => 'Aircraft',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'مركبة ATV',
                //     'name_en' => 'ATV',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'UTV',
                //     'name_en' => 'UTV',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'المنزل المتنقل',
                //     'name_en' => 'Caravan',
                // ],

                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'لوحة المعوقين',
                //     'name_en' => 'Disabled Plate ',
                // ],
                // [
                //     'Category_id' => '2',
                //     'name_ar' => 'المركبات ذات اللوحات المعوقين',
                //     'name_en' => 'Disabled Plate Vehicles',
                // ],
                // [
                //     'Category_id' => '3',
                //     'name_ar' => 'معدات السيارات',
                //     'name_en' => 'Automotive Equipment',
                // ],
                // [
                //     'Category_id' => '3',
                //     'name_ar' => 'معدات الدراجات النارية',
                //     'name_en' => 'Motorcycle Equipment',
                // ],
                // [
                //     'Category_id' => '3',
                //     'name_ar' => 'المعدات البحرية',
                //     'name_en' => 'Marine Equipment',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'الحاسوب',
                //     'name_en' => 'Computer',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'هاتف محمول',
                //     'name_en' => 'Mobile phone',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'الصورة والكاميرا',
                //     'name_en' => 'Photo & Camera',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'تزيين المنزل',
                //     'name_en' => 'Home decoration',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'إلكترونيات منزلية',
                //     'name_en' => 'Home Electronics',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'الأجهزة الكهربائية',
                //     'name_en' => 'Electrical Appliances',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'الملابس والاكسسوارات',
                //     'name_en' => 'Clothing & Accessories',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'لحظة',
                //     'name_en' => 'Moment',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'الأم والطفل',
                //     'name_en' => 'Mother & Baby',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'العناية الشخصية ومستحضرات التجميل',
                //     'name_en' => 'Personal Care & Cosmetics',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'الهوايات والألعاب',
                //     'name_en' => 'Hobby & Toys',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'التحكم في الألعاب',
                //     'name_en' => 'Gaming & Console',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'كتاب ومجلة وفيلم',
                //     'name_en' => 'Book, Magazine & Movie',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'موسيقى',
                //     'name_en' => 'Music',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'رياضة',
                //     'name_en' => 'Sport',
                // ],[
                //     'Category_id' => '4',
                //     'name_ar' => 'المجوهرات والمجوهرات والذهب',
                //     'name_en' => 'Jewelry, Jewelery & Gold',
                // ],[
                //     'Category_id' => '4',
                //     'name_ar' => 'مجموعة',
                //     'name_en' => 'Collection',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'العتيقة',
                //     'name_en' => 'Antique',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'سوق الحدائق والبناء',
                //     'name_en' => 'Garden & Construction Market',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'الهندسة الإلكترونية',
                //     'name_en' => 'Electronic Engineering',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'المكتب والقرطاسية',
                //     'name_en' => 'Office & Stationery',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'طعام وشراب',
                //     'name_en' => 'Food & Beverage',
                // ],
                // [
                //     'Category_id' => '4',
                //     'name_ar' => 'كل شيء آخر',
                //     'name_en' => 'Everything Else',
                // ],
                // [
                //     'Category_id' => '5',
                //     'name_ar' => 'آلات البناء',
                //     'name_en' => 'Construction Machinery',
                // ],
                // [
                //     'Category_id' => '5',
                //     'name_ar' => 'الآلات الزراعية',
                //     'name_en' => 'Agricultural Machinery',
                // ],
                // [
                //     'Category_id' => '5',
                //     'name_ar' => 'صناعة',
                //     'name_en' => 'Industry',
                // ],
                // [
                //     'Category_id' => '5 ',
                //     'name_ar' => 'الطاقة الكهربائية',
                //     'name_en' => 'Electric & Energy',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'جامعة المدرسة الثانوية',
                //     'name_en' => 'High school University',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'المدرسة الابتدائية والثانوية',
                //     'name_en' => 'Primary & Secondary School',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'لغة اجنبية',
                //     'name_en' => 'Foreign language',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'الحاسوب',
                //     'name_en' => 'Computer',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'المقود',
                //     'name_en' => 'Steering wheel',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'رياضة',
                //     'name_en' => 'Sport',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'فن',
                //     'name_en' => 'Art',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'موسيقى وآلة',
                //     'name_en' => 'Music & Instrument',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'المسرح والتمثيل',
                //     'name_en' => 'Theater & Acting',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'تطوير الذات',
                //     'name_en' => 'Self-improvement',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'دورات التدريب المهني',
                //     'name_en' => 'Vocational Courses',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'التعليم الخاص',
                //     'name_en' => 'Special education',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'نمو الطفل',
                //     'name_en' => 'Child Development',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'كلام جميل وإلقاء',
                //     'name_en' => 'Beautiful Speech & Diction',
                // ],
                // [
                //     'Category_id' => '6',
                //     'name_ar' => 'التصوير',
                //     'name_en' => 'Photography',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'المحاماة والاستشارات القانونية',
                //     'name_en' => 'Advocacy & Legal Consultancy',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'تعليم',
                //     'name_en' => 'Education',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'الترفيه والأنشطة',
                //     'name_en' => 'Entertainment and Activities',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'الجمال والعناية',
                //     'name_en' => 'Beauty and Care',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'تكنولوجيا المعلومات وتطوير البرمجيات',
                //     'name_en' => 'IT and Software Development',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'الموارد البشرية',
                //     'name_en' => 'Human Resources',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'التشييد والبناء',
                //     'name_en' => 'Construction and Building',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'الأعمال والاستراتيجية',
                //     'name_en' => 'Business and Strategic...',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'الحماية والأمن',
                //     'name_en' => 'Protection and Security',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'اللوجستيات والنقل',
                //     'name_en' => 'Logistics and Transport',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'التجارة والبيع بالتجزئة',
                //     'name_en' => 'Merchandising and Retail',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'المحاسبة والمالية والحسابات',
                //     'name_en' => 'Accounting, Finance and Ba',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'هندسة',
                //     'name_en' => 'engineering',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'خدمة الزبائن',
                //     'name_en' => 'Customer service',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'إدارة المكاتب والشؤون الإدارية',
                //     'name_en' => 'Office Management and Administrative',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'دوام جزئي ووظيفة إضافية',
                //     'name_en' => 'Part Time and Additional Job',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'التسويق وإدارة المنتجات',
                //     'name_en' => 'Marketing and Product Management',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'راديو وسينما وتليفزيون',
                //     'name_en' => 'Radio, Sinema & Televi',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'المطعم والإقامة',
                //     'name_en' => 'Restaurant and Accommodation',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'صحة',
                //     'name_en' => 'Health',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'مبيعات',
                //     'name_en' => 'Sales',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'إصلاح وصيانة',
                //     'name_en' => 'Repair and maintenance',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'الزراعة والثروة الحيوانية',
                //     'name_en' => 'Agriculture and Livestock',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'التصميم والإبداع',
                //     'name_en' => 'Design and Creativity',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'المنسوجات والملابس',
                //     'name_en' => 'Textile and Apparel',
                // ],
                // [
                //     'Category_id' => '7',
                //     'name_ar' => 'الإنتاج والتصنيع',
                //     'name_en' => 'Production and Manufacturing',
                // ],
                // [
                //     'Category_id' => '8',
                //     'name_ar' => 'الرضع وجليسة الأطفال',
                //     'name_en' => 'Baby & Babysitter',
                // ],
                // [
                //     'Category_id' => '8',
                //     'name_ar' => 'كبار السن والتمريض',
                //     'name_en' => 'Elderly & Nursing',
                // ],
                // [
                //     'Category_id' => '8',
                //     'name_ar' => 'مدبرة المنزل والأعمال المنزلية',
                //     'name_en' => 'Housekeeper & Housework',
                // ],
                // [
                //     'Category_id' => '9',
                //     'name_ar' => 'حيوانات أليفة',
                //     'name_en' => 'Pets',
                // ],
                // [
                //     'Category_id' => '9',
                //     'name_ar' => 'أسماك الزينة',
                //     'name_en' => 'Aquarium Fish',
                // ],
                // [
                //     'Category_id' => '9',
                //     'name_ar' => 'مُكَمِّلات',
                //     'name_en' => 'Accessories',
                // ],
                // [
                //     'Category_id' => '9',
                //     'name_ar' => 'مستحضرات التجميل',
                //     'name_en' => 'Cosmetics',
                // ],
                // [
                //     'Category_id' => '9',
                //     'name_ar' => 'يم & أمي',
                //     'name_en' => 'Yem & Mom',
                // ],
                // [
                //     'Category_id' => '9',
                //     'name_ar' => 'دواجن',
                //     'name_en' => 'Poultry',
                // ],
                // [
                //     'Category_id' => '9',
                //     'name_ar' => 'ماشية',
                //     'name_en' => 'cattle',
                // ],
                // [
                //     'Category_id' => '9',
                //     'name_ar' => 'الحيوانات الصغيرة',
                //     'name_en' => 'Small Animals',
                // ],
                // [
                //     'Category_id' => '9',
                //     'name_ar' => 'مخلوقات البحر',
                //     'name_en' => 'sea ​​creatures',
                // ],
                // [
                //     'Category_id' => '9',
                //     'name_ar' => 'الزواحف',
                //     'name_en' => 'reptiles',
                // ],
                // [
                //     'Category_id' => '9',
                //     'name_ar' => 'الحشرات',
                //     'name_en' => 'insects',
                // ],

            ]);
    }
}
