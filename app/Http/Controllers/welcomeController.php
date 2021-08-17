<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

class welcomeController extends Controller
{
    public function index()
    {  
        $categories = BlogCategory::find(1);
        $blogs = Blog::paginate(2);
       
        return view('web.welcome.index' , [
            'categories' => $categories,
             'blogs' => $blogs       
            ]);
        }   

}
