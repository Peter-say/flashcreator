<?php

namespace App\Http\Controllers\Auth\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller

{

  public function __construct()
  {
      $this->middleware('auth');
  }

  
    public function users()
    {
        return view('users.dashboard');
    }

    public function postpage()
    {
     $blogs = blog::latest()->paginate(2);
     return view('.Dashboard.post_page',compact('blogs'));
        
    }

    public function store(Request $request)
    {
     dd($post);
       $post = $request->validate([
           'title' => 'required',
           'body' => 'required',
         ]);

        blog::create($post);   
        return back();

        blog::findOrFail($id)->delete();

       return redirect('/');
     }

}
