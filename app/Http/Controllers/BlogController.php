<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( User $user )
    {     
      
        $user = auth()->user();
        $categories = BlogCategory::paginate(10);
        $blogs = Blog::latest()->paginate(10);
        return view('Admin.blog', [
            'blogs' => $blogs, 
             'categories' => $categories
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
    public function store(Request $request , User $user)
    {  
        $user = Auth::User();
        $data = $this->validateData($request);
        $data['user_id'] = $user->id;
        Blog::create($data);
        return redirect()->back() ->success('Post added successfully!');
    }

    private function validateData(Request $request){
        $data = $request->validate([
            'blog_category_id' => 'required|exists:blog_categories,id',
            'name' => 'required|string',
            'description' => 'required|string',
            'image' =>  'required|image',

        ]);

         $user = auth()->user();
        if($image = $request->file('image')){
            $filename = time().'.'.$image->extension();
            $destinationPath = public_path('/blog_images');
            $image->move($destinationPath, $filename);
            $data['image'] = $filename;
        }

        return $data;
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
        //
    }
}
