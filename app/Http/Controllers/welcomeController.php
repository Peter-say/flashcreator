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

        return view('web.welcome.index', [
            'categories' => $categories,
            'blogs' => $blogs,
            'comments' => $comments,
        ]);
    }

    public function showPost($blog)
    {
        $comments = Comment::get();
        $blog = Blog::where('id', $blog)->find(1);
        return view('web.single-post', [
            'blog' => $blog,
            'comments' => $comments
        ]);
    }

    public function search()
    {
        $search = $_GET['query'];
        $blogs = Blog::where('title', 'like', '%' . $search . '%')->get();
        return view('web.welcome.index', [
            "blogs" => $blogs,
        ]);
    }
}
