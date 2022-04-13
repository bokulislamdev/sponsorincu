<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_ar',
        'slug',
        'blog_category_id',
        'image',
        'description',
        'description_ar',
        'sell_post',
        'offer_post',
        'user_id',
        'status',
    ];

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class,'blog_category_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
  
}
