<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    
    use HasFactory;
    
    protected $fillable = [ 'blog_category_id' , 'image', 'title' , 'description ', 'slug', 'user_id' ];

    public function users()
    {
        return $this->belongsTo(User::class );
    }

    public function category()
    {
        return $this->hasMany(BlogCategory::class);
    }


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
