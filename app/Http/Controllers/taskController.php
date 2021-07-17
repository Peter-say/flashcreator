<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;

class taskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->paginate(2);
        return view('TASKS.task',compact('tasks'));
    }
   
     public function store(Request $request)
     {
        $post = $request->validate([
            'name' => 'required',
            'body' => 'required|min:10',
          ]);

        Task::create($post);   
        return back();

        Task::findOrFail($id)->delete();

       return back();
     }

}

