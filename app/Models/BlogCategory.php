<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_ar',
        'slug',
        'status',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class,'blog_category_id','id');
    }
}
