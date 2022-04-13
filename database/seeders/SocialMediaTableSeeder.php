<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;

class SocialMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialMedia::create([
            'facebook'=>'no',
            'youtube'=>'no',
            'linkdin'=>'no',
            'twitter'=>'no',
            'instagram'=>'no',
            'pinterest'=>'no',
            'telegram'=>'no',
            'whatsapp'=>'no',
        ]);
    }
}
