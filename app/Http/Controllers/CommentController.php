<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Blog;

class CommentController extends Controller
{
    public function store(Blog $blog, Request $request)
    {
       
       $blog->comments()->create([
       'user_id' =>$request->user()->id,
       ]);

       return back();
        // $comment = new Comment;
        // $comment->body = $request->get('comment_body');
        // $comment->user()->associate($request->user());
        // $blog = Comment::find($request->get('blog_id'));
        // $blog->comments()->save($comment);

        // return back();
    }
}
