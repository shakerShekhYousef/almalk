<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'first_name' => 'mohammed',
            'last_name' => 'assi',
            'email' => 'mohammed@gmail.com',
            'email_verified_at' => '2022-09-16',
            'password' => Hash::make(123456),

        ];
        User::insert($data);
        // User::factory(10)
        //     ->create()
        //     ->each(
        //         function($user){
        //             $user -> assignRole('moderator');
        //         }
        // );
    }
}
