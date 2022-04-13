<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorRequest extends Model
{
    use HasFactory;


    protected $fillable = [
        'event_id',
        'first_name',
        'last_name',
        'company',
        'email',
        'phone',
        'package',
        'message',
        'trams_condition',
        'status',
    ];
}
