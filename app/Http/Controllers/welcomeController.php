<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Comment;

class welcomeController extends Controller
{
    public function index()
    {  
       
        $comments = Comment::get();
        $categories = BlogCategory::get();
        $blogs = Blog::paginate(20);
       
        return view('web.welcome.index' , [
            'categories' => $categories,
             'blogs' => $blogs  ,
             'comments' => $comments ,     
            ]);
        }   

}
