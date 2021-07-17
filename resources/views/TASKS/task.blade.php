@extends('layouts.app')
@section('content')

  <div class="row">
   <div class="col-3 m-15">
      <a href="/" class="btn btn-primary mt-5  mr-30">go back</a>
   </div>
  </div>
     <div class="container col-8  mb-5 mt-5 ">
             
         <div class="todo-header justify-content-center bg-primary h-25  p-3 text-center ">to do list app</div>
         <div class="card">
            
            <div class=" mr-5 ml-5 mt-5 mb-3">
            <form action="{{route('TASKS/task')}}" method="post">
            <label for="task">TASK:</label>
            {{ csrf_field() }}
             <div class="mb-2">
             <input  type="text" name="name" class="form-control " id="tasks" class="mb-2">
            <div class="error">
            @error('name')
           <span>{{ $message }}</span>
             @enderror
            </div>
            <div class="form-group purple-border">
            <label for="name">some text</label>
            <textarea class="form-control" id="name" rows="10"></textarea>
         </div>
            <div class="error">
            @error('name')
           <span>{{ $message }}</span>
             @enderror
            </div>
             </div>
            </div>
            
             <div class="justify-content-center ml-5 mb-3">
             <button class=" btn btn-primary "> <i class="fa fa-plus"></i> ADD TASK</button>
             </div>
           </div>
          </div>

        
      <div class="container col-8  mb-5">
         <div class="todo-list-header btn-success p-3 text-center">CURRENT TASK</div>
            <div class="card">
             <div class="card-body"></div>
             <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ALL TASKS</th>
                    <th>DELETE TASK</th>
                    
                  </tr>
                </thead>
                <tbody>
                 @foreach($tasks as $task)
                  <tr>
                    <td>{{$task->name}}</td>
                 </tr>
                  @endforeach
                </tbody>
              </table>
                {!! $tasks->links() !!}
            </div>
      </div>
    </div>
  
 @endsection