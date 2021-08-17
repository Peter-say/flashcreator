 @extends('Admin.layout.app')

 @section('content-2')
 
 @include('Admin.notifications.flash-messages')
 <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <span class="fr">
                            <a href="" data-toggle="modal" data-target="#add" class="btn btn-primary btn-sm">New Blog +</a>
                        </span>
                    </ol>
                </div>
                <h5 class="page-title">Blog Lists</h5>
            </div>

        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">View Blog Data</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spapostg: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Author Name</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Created At </th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($blogs as $blog )
                                @foreach ($categories as $category )
                                <tr>
                                    <td>{{$blog->id}}</td>
                                    <td>{{ $category->name }}</td>
                                    <td></td>
                                    <td>{{ $blog->title}}</td>
                                    <td>{{ $blog->description }}</td>
                                    <td>
                                        <!-- @if (!empty($post->image))
                                        <a href="{{ asset('post_images/'.$post->image) }}" target="_blank" class="btn btn-primary btn-xs">View</a>
                                        @endif -->
                                    </td>
                                    <td>{{date('D , d M Y',strtotime($blog->created_at)) }}</td>
                                    <td class="center">
                                        <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit-{{$blog->id}}"><i class="fa fa-edit">Edit</i></a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="fa fa-trash">Delete</i></button>
                                    </td>
                                </tr>


                                <div class="modal fade" id="edit-{{$blog->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit post  </h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('admin.blog.update',$blog->id)}}" method="post" enctype="multipart/form-data">@csrf @method('put')
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="">Category</label>
                                                            <select name="blog_cateory_id" id="role" class="form-control"  required>
                                                                <option value="" disabled selected> Select One</option>
                                                                @foreach ($categories as $category)
                                                                    <option value=" {{ $category->name }}" {{ old('blog_category_id') == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="form-group col-md-12">
                                                            <label for="">Title</label>
                                                            <input type="text" class="form-control" id="" value="{{ $category->title }}" name="title" placeholder="name">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label>Description</label>

                                                                <textarea name="description" rows="5" cols="40" class="form-control" value=""></textarea>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="">Image</label>
                                                            <input type="file" class="form-control" id="" name="image" />
                                                        </div>

                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="delete">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-red">Are your sure you want to delete? This action can`t be revoked!</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <form action="{{route('admin.blog.destroy',$blog->id)}}" method="post">{{csrf_field()}} {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-warning">Proceed</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                                @endforeach
                                @endforeach
                                {{ $blogs->links() }}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->

    <div class="modal fade" tabindex="-1" id="add" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>New Blog</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" action="{{route('admin.blog.store')}}" method="post">
                    @csrf
                        <div class="form-row">
                            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }} col-md-6">
                                <label for="">Blog category</label>
                                <select name="blog_category_id" id="blog_category_id"  class="form-control" autofocus>
                                    <option value="" disabled selected> Select One</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->name}}">{{ $category->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-12">
                                <label for=""></label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="" name="title" placeholder="title">
                            </div>

                            <div class="form-group col-md-12">

                                <textarea name="description" rows="5" cols="40" class="form-control  @error('description') is-invalid @enderror" value="">{{old('description')}}</textarea>

                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control @error('full_name') is-invalid @enderror" />
                            </div>

                            <div class="form-group col-12 text-center mt-2">
                                <button type="submit" class="btn btn-outline-primary btn-lg">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

 @endsection