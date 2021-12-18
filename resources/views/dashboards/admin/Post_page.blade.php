<!-- @extends('layouts.app')
@section('content')



   div

<div class="col-12">
    <button class="d-flex flex-row-reverse btn btn-primary">back</button>
</div>
<div class="container mt-6 d-flex justify-content-center ">
    <div class="card col-12 mb-2">
        <div class="head">add new blog</div>
        @if ($message = Session::get('success'))
<div class="alert alert-success">
    <div class="col-3">{{$message}}</div>
</div>
@endif
        <form action="{{ route('admin.post-page')}}" method="POST">
            @csrf

            <div class=" mr-5 ml-5 mt-5 mb-3">
               
                    <label for="name">title:</label>

                 
                   <div class="mb-2 col-6">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror mb-3"
                            value="{{old('name')}}">
                        <div class="error">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
   </div>
                        <div class="mb-2 col-6">
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror mb-3"
                            value="{{old('image')}}" placeholder="add image">
                        <div class="error">
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                  </div>
                  </div> 

                  <div class="col-12">
                        <div class="form-group purple-border">
                            <label for="description">some text</label>
                            <textarea id="description" class="form-control  @error('description') is-invalid @enderror" 
                            value="{{old('description')}}" rows="10" name="description"></textarea>
                        </div>
                        <div class="error">
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
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





@endsection -->