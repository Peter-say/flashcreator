<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategory::paginate(10);
        $blogs = Blog::paginate(20);
        return view('Admin.blog', [
            'categories' => $categories,
            'blogs' => $blogs
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


        $data['user_id'] = $user->id;
        $user = auth()->user();
        $data = $request->validate([
            'blog_categories_id' => 'numeric|exists:blog_categories,id',
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);

        $user = Auth::User();
        if ($image = $request->file('image')) {
            $filename = time() . '.' . $image->extension();
            $destinationPath = public_path('/blog_images');
            $image->move($destinationPath, $filename);
            $data['image'] = $filename;
        }



        $blog = Blog::create($data);
        return back()->with('success_message', 'Blog created successfully');
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
