<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable =['parent_id', 'name'];

   

    public function blogs()
    {
        return $this->hasMany(BlogCategory::class );
    }
}
