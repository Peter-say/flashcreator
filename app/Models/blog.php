<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    
    use HasFactory;
    
    protected $fillable = [  'image', 'name' , 'description ', 'slug' ];

    public function users()
    {
        return $this->belongsTo(User::class );
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
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
