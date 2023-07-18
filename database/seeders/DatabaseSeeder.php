<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            CountrySeeder::class,
            CitySeeder::class,
            EstateCategorySeeder::class,
            EstateCategorySubSeeder::class,
            Estate_Category_Sub_Type_Seeder::class,
            CategoriesSeeder::class,
            CategorySeeder::class,
            Category_Sub_Seeder::class,
            Category_sub_type_Seeder::class,
            Category_sub_type_det_Seeder::class,
            ViewSeeder::class,
            HousingTypeSeeder::class,

            EstatePropertySeeder::class,
            EstatePropertyOptiensSeeder::class,
            DirectionsSeeder::class,
            EnvironmentSeeder::class,
            AreaSeeder::class,
            TransportrSeeder::class,

            InternalFeaturesSeeder::class,
            ExteriorFeaturesSeeder::class,

            RolesAndPermissionsSeeder::class,
            UserSeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
