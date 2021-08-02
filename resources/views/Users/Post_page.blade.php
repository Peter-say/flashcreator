@extends('layouts.app')
@section('content')

<div class="col-6">
    <button class="d-flex flex-row-reverse btn btn-primary">back</button>
</div>
<div class="container mt-6 d-flex justify-content-center ">
    <div class="card col-8 mb-2">
        <div class="head">add new blog</div>
        @if ($message = Session::get('success'))
<div class="alert alert-success">
    <div class="col-3">{{$message}}</div>
</div>
@endif
        <form action="{{ route('post-page')}}" method="POST">
            @csrf

            <div class=" mr-5 ml-5 mt-5 mb-3">
                <form action="" method="post">
                    <label for="title">Blog:</label>

                    <div class="mb-2">
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror mb-3"
                            value="{{old('title')}}">
                        <div class="error">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group purple-border">
                            <label for="body">some text</label>
                            <textarea id="body" class="form-control  @error('body') is-invalid @enderror" 
                            value="{{old('body')}}" rows="10" name="body"></textarea>
                        </div>
                        <div class="error">
                            @error('body')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
            </div>

            <div class="justify-content-center ml-5 mb-3">
                <button type="submit" class=" btn btn-primary "> <i class="fa fa-plus"></i> submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>





@endsection