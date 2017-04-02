@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>List</small>
                </h1>
            </div>
           <div id="add">
           <div class="row">
               <div class="col-md-3">
                    <a href="javascript:void(0)" data-check="{{Auth::user()->level}}" id="add-user">Add user</a>
               </div>
               <div class="col-md-3 col-md-offset-6">
                   <div class="input-group">
                       <input type="text" name="search" placeholder="search..." class="form-control" id="search">
                        <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                   </div>
               </div>
           </div>
           </div>
           <!-- modal -->
          <div id="modal-user" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body" id="modal-content-user">
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
            <!-- /.col-lg-12 -->
            <div id="content-table-user">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">

                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>level</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
            <?php $i=1 ?>
               @foreach($dataUser as $key => $value)
                     <tr class="odd gradeX" align="center">
                        <td>{{$i}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>  
                          @if($value->level==1)
                          {{"SuperAdmin"}}
                          @elseif($value->level==2)
                          {{"Manager"}}
                          @else
                          {{"Member"}}
                          @endif

                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="delete-user" id="{{$value->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="javascript:void(0)" class="update-user" id="{{$value->id}}">Edit</a></td>
                    </tr>
                    <?php $i++ ?>
                @endforeach
                   
                   
                </tbody>
            </table>
            
            
                {{$dataUser->links()}}
                </div>
          
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection