<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transports')->insert(
            [
                [
                    'name_ar' => 'ميني باص',
                    'name_en' => 'Minibus', ],
                [
                    'name_ar' => 'عربة قطار',
                    'name_en' => 'Cable Car', ],
                [
                    'name_ar' => 'محطة قطار',
                    'name_en' => 'Railway Station', ],
                [
                    'name_ar' => 'مطار',
                    'name_en' => 'Airport', ],
                [
                    'name_ar' => 'المترو',
                    'name_en' => 'Metro', ],
                [
                    'name_ar' => 'موقف باص',
                    'name_en' => 'Bus stop', ],
                [
                    'name_ar' => 'المتروباص',
                    'name_en' => 'Metrobus', ],

            ]);
    }
}
