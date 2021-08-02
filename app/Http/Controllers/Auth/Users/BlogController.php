<?php

namespace App\Http\Controllers\Auth\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;

class BlogController extends Controller
{

   

   public function users()
   {
   return view('Users.dashboard');
   }

   public function postpage()
   {
       $blogs = Blog::latest()->get();
    return view('Users.post_page',[
        'blogs' => $blogs
    ]);
   }

   public function store(Request $request)
   {
         $validated = $request->validate([
             'title'=> 'required',
             'body'=> 'required',

         ]);
          
         Blog::create($request->all());
   return back()->with('success', 'Blog created successfully.');
   }
}
