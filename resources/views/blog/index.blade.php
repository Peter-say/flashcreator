@extends('Admin.layout.app')

@section('content-2')

@include('Admin.notifications.flash-messages')

<div class="container">
    <div class="statbox widget box box-shadow mt-5 ">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <h4>Create New Post</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form enctype="multipart/form-data" class="form-row" action="" method="POST"> @csrf
                <div class="form-group col-md-6 col-sm-12">
                    <label for="">Category <span class="required">*</span></label>
                    <select name="blog_category_id" class="form-control id="" required>
                        <option value="" disabled selected>Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="">Cover Image <span class="required">*</span></label>
                    <input class="form-control" type="file" name="image">
                </div>



                <div class="form-group col-md-12">
                    <label for="">Title <span class="required">*</span></label>
                    <input class="form-control" type="text" required name="title" placeholder="......">
                </div>

                <div class="form-group col-md-12">
                    <label for="">Body <span class="">*</span></label>
                    <textarea id="body" rows="10" type="text" name="body" class="form-control"></textarea>
                </div>


                <div class="form-group col-12">
                    <button class="btn btn-primary btn-lg">Submit</button>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection