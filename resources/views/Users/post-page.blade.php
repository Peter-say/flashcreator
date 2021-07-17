@extends('Admin.Dashboard.app')

@section('content-2')
  <div class="col-6">
      <button class="d-flex flex-row-reverse btn btn-primary">back</button>
  </div>
<div class="container mt-6 d-flex justify-content-center img">
    <div class="card col-8 mb-2">
      <div class="head mt-3">add new blog</div>
      <form action="/" method=" post">
      @csrf
      <div class="form-group">
      <label for="name">Title:</label>
       <input type="text" class="form-control mt-3" id="title">
       <div class="error">
            @error('title')
           <span>{{ $message }}</span>
             @enderror
            </div>
        </div>
       
        <div class="form-group">
        <label for="body">Write Your Post:</label>
         <textarea class="form-control " rows="10" id="body"></textarea>
         <div class="error">
            @error('body')
           <span>{{ $message }}</span>
             @enderror
            </div>
          </div>
            <button id="submit" class="submit btn btn-primary w-20 mb-3">submit</button>
            </form>
        </div>
    </div>
  </div>

@endsection