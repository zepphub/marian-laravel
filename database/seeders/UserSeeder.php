<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=> env('ADMIN_EMAIL_SEED','testadmin@gmail.com'),
               'is_admin'=>'1',
               'password'=> bcrypt(env('ADMIN_PASS_SEED', '123456')),
            ],
            [
               'name'=>'User',
               'email'=> env('USER_EMAIL_SEED','testuser@gmail.com'),
               'is_admin'=>'0',
               'password'=> bcrypt(env('USER_PASS_SEED', '123456')),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
