<?php

namespace App\Models;

use App\Models\EventType;
use App\Models\EventTopic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_ar',
        'slug',
        'address',
        'event_type_id',
        'event_topic_id',
        'date',
        'image',
        'description',
        'description_ar',
        'aspect_attendance',
        'aspect_male',
        'aspect_female',
        'is_published',
        'basic_price',
        'standard_price',
        'premium_price',
        'status',
    ];

    public function event_type()
    {
        return $this->belongsTo(EventType::class,'event_type_id');
    }
    public function event_topic()
    {
        return $this->belongsTo(EventTopic::class,'event_topic_id');
    }
}
