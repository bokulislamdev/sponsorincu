<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;
use Database\Seeders\WebSettingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            WebSettingSeeder::class,
            UsersTableSeeder::class,
            SocialMediaTableSeeder::class,
        ]);
    }
}
