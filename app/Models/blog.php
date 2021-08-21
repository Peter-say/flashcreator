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
        return $this->belongsTo(user::class);
    }

    public function blogcategory()
    {
        return $this->hasOne(BlogCategory::class)->withDefault(function($user , $post){
            $user->name = "Author";
        });
    }

    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }
}
