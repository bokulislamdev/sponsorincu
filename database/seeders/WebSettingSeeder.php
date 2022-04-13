<?php

namespace Database\Seeders;

use App\Models\WebSetting;
use Illuminate\Database\Seeder;

class WebSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebSetting::create([
            'website_name' => 'website name',
            'homepage_title' => 'this is title',
            'about' => 'this is about',
            'meta_tags' => 'website',
            'meta_description' => 'demo',
            'sitebanner' => '',
            'logo' => '',
            'footer_logo' => '',
            'favicon' => '',
            'email' => 'web@gmail.com',
            'phone' => '01746955544',
            'state_address' => 'none',
            'local_address' => 'none',
            'address' => 'none',
            'map_code' => 'none',
        ]);
    }
}
