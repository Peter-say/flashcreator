@extends('Admin.layout.app')

@section('content-2')
@include('Admin.notifications.flash-messages')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <span class="fr">
                            <a href="" data-toggle="modal" data-target="#add" class="btn btn-primary btn-sm">New Category +</a>
                        </span>

                    
                    </ol>
                </div>
                <h5 class="page-title">Blog category Lists</h5>
            </div>

        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">


                        <h4 class="mt-0 header-title">View Blog Categories Data</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Created At </th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{date('D , d M Y',strtotime($category->created_at)) }}</td>
                                    <td class="center">
                                        <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit-{{$category->id}}"><i class="fa fa-edit">Edit</i></a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="fa fa-trash">Delete</i></button>
                                    </td>
                                </tr>


                                <div class="modal fade" id="edit-{{$category->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Category  </h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('admin.category.update',$category->id)}}"method="post" enctype="multipart/form-data">{{csrf_field()}} {{method_field('PATCH')}}
                                                    <div class="form-group" >
                                                        <label for="">Name</label>
                                                        <input type="text" name="name" maxlength="50" id="" class="form-control" required autofocus value="{{$category->name}}">
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
                                                <form action="" method="post">{{csrf_field()}} {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-warning">Proceed</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                {{ $categories->links() }}
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
                    <h4>Add Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="">Name</label>
                                <input type="text" class="form-control" id="" name="name" placeholder="e.g. Chevron">
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