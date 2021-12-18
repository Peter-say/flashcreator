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
                <h5 class="page-name">Blog Lists</h5>
            </div>

        </div>
        <!-- end row -->
        <div class="row">
        
        </div> <!-- end row -->

    </div><!-- container fluid -->

    <div class="modal fade" tabindex="-1" id="add" role="dialog" aria-hidden="true">
        <div class="card col-lg">
            <div class="card-content">
                <div class="card-header">
                    <h4>New Blog</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <div class="">
                   
                </div>
            </div>
        </div>
    </div>

 @endsection