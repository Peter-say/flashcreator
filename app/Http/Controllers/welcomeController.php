<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class welcomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(1);
        return view('web.welcome.index', [
            'blogs'=> $blogs
        ]);
    }

    
}
