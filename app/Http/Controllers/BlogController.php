<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BlogCategory $categories)
    {

        $comments = Comment::get();
        $categories = BlogCategory::get();
        $blogs = Blog::latest()->paginate(20);
       
        return view('Admin.blog', [
            'categories' => $categories,
            'blogs' => $blogs,
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
            'blog_category_id' => 'string|exists:blog_categories,id',
            'title' => 'required|string',
            'body' => 'required',
            'image' =>  'required|image',


        ]);

        $newImageName = uniqid() . '_' . $request->title . '.' .
            $request->image->extension();
        $request->image->move(public_path('postImages'), $newImageName);


        Blog::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image' => $newImageName,
            'user_id' => $user->id
        ]);
        return back()->with('success_message', ' Post added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::findorfail($id)->delete();

        return back()->with('success', 'Blog created successfully.');
    }
}
