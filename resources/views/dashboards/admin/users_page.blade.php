 @extends('Admin.Dashboard.app')

 @section('content-2')

 <div id="tableCheckbox" class="">
     <div class="statbox widget box box-shadow mt-5">
         <div class="widget-header">
             <div class="row">
                 <div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
                     <h4>Users</h4>
                 </div>
             </div>
         </div>
         <div class="table-responsive">
             <table class="table mb-4">
                 <thead>
                     <tr>
                         <th class="text-center">S/N</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Role</th>
                         <th>Register Date</th>
                         <th>Phone No</th>
                         <th>Posts</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                       
                         
                         <td class="text-center">1</td>
                         <td class="text-primary"></td>
                         <td></td>
                         <td class=""><span class=" shadow-none badge outline-badge-primary">user</span></td>
                         <td>5 min ago</td>
                         <td>080999999999</td>
                         <td></td>
                      
                     </tr>
                    
                 </tbody>
             </table>
         </div>
     </div>
 </div>
 </div>
 @endsection