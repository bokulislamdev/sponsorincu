<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_name',
        'homepage_title',
        'about',
        'meta_tags',
        'meta_description',
        'sitebanner',
        'logo',
        'footer_logo',
        'favicon',
        'email',
        'phone',
        'state_address',
        'local_address',
        'address',
        'map_code'
    ];
}
