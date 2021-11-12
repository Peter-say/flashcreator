<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    
    use HasFactory;
    
    protected $fillable = ['blog_category_id',  'title' , 'body ',  'image',  'slug' ];

    public function user()
    {
        return $this->belongsTo(User::class );
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class , 'blog_category_id');
    }

    // public function comments()
    // {
    //     return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    // }
    public function sluggable(): array
    {
        return [
            'slug' => 
            [
                'source' =>'title'
            ]
         ];
    }
}
