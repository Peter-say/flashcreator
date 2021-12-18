@extends('Admin.layout.app')

@section('content-2')

<div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-name">View Blog Data</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border: 0; width: 100%;">
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
                                <tr>
                                    <td>{{$blog->id}}</td>
                                    <td></td>
                                    <td</td>
                                    <td>{{ $blog->title}}</td>
                                    <td>{{ $blog->description }}</td>
                                    <td>
                                        @if (!empty($post->image))
                                        <img src="{{ asset('postImages/'. $blog->image) }}" alt="">
                                        <a hre="{{ asset('postImages/'. $blog->image) }}" target="_blank" class="btn btn-primary btn-xs">View</a>
                                        @endif
                                    </td>
                                    <td>{{date('D , d M Y',strtotime($blog->created_at)) }}</td>
                                    <td class="center">
                                        <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit-{{$blog->id}}"><i class="fa fa-edit">Edit</i></a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="fa fa-trash">Delete</i></button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="delete">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-name text-red">Are your sure you want to delete? This action can`t be revoked!</h5>
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
                                
                                
                            </tbody>
                            {{ $blogs->links() }}
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
@endsection