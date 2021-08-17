<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id' , 'blog_category_id' , 'title' , 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function blogcategory()
    {
        return $this->belongsTo(Blog::class);
    }
}
