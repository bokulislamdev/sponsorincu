<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\WebSetting;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'company_name' => '',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'image' => '',
            'phone' => '',
            'city_id' => '',
            'post' => '',
            'country_id' => '',
            'address' => '',
            'status' => '1',
            'role' => '1',
            'email_verified_at' =>  now(),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'org',
            'username' => 'org',
            'company_name' => '',
            'email' => 'org@gmail.com',
            'password' => Hash::make('org'),
            'image' => '',
            'phone' => '',
            'city_id' => '',
            'post' => '',
            'country_id' => '',
            'address' => '',
            'status' => '1',
            'role' => '2',
            'email_verified_at' =>  now(),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'sponsor',
            'username' => 'sponsor',
            'company_name' => '',
            'email' => 'sponsor@gmail.com',
            'password' => Hash::make('sponsor'),
            'image' => '',
            'phone' => '',
            'city_id' => '',
            'post' => '',
            'country_id' => '',
            'address' => '',
            'status' => '1',
            'role' => '3',
            'email_verified_at' =>  now(),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'marketer',
            'username' => 'marketer',
            'company_name' => '',
            'email' => 'marketer@gmail.com',
            'password' => Hash::make('marketer'),
            'image' => '',
            'phone' => '',
            'city_id' => '',
            'post' => '',
            'country_id' => '',
            'address' => '',
            'status' => '1',
            'role' => '4',
            'email_verified_at' =>  now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
