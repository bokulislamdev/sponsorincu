<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventTopic extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_type_id',
        'name',
        'name_ar',
        'slug',
        'status',
    ];
}
