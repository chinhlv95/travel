@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">

    <div class="container">
    <div id="edit-user-form">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit user
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <form action="{{URL::to('/')}}/admin/user/edit/{{$dataUserFind->id}}" id="user-form-update" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                      <div class="alert alert-success alert-user">
                         
                        </div>
                    <div class="form-group">
                        <label>username</label>
                        <input class="form-control" value="{{$dataUserFind->name}}" name="name" placeholder="Please Enter username" />
                        <span id="error-name"></span>
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input class="form-control" name="email" value="{{$dataUserFind->email}}" type="email" placeholder="Please Enter email" />
                         <span id="error-email"></span>
                    </div>
                    <div class="form-group">
                      @if(Auth::user()->level!=1)
                        <label>password</label>
                        <input class="form-control" required type="password" name="password" value="" placeholder="Please Enter password" />
                      @endif
                    </div>
                    <div class="form-group">
                    @if(Auth::user()->level==1)
                        <label>role</label>
                        <?php 
                         $arrayLevel=array('2'=>'Manager','3'=>'member')
                         ?>
                       @foreach ($arrayLevel as $key => $value)
                          <label class="radio-inline">
                       
                            <input  name="level" value="{{$key}}" type="radio" {{($dataUserFind->level==$key)?"checked":""}} >{{$value}}
                      
                        </label>

                       @endforeach
                       @else
                       <input type="hidden" name="level" value="{{$dataUserFind->level}}">
                         <label> role:
                         @if($dataUserFind->level==1)
                           {{"SuperAdmin"}}
                         @elseif($dataUserFind->level==2)
                           {{"Manager"}}
                         @else
                           {{"Member"}}
                         @endif
                          </label>
                        @endif

                        
                    </div>
                    <button type="submit" class="btn btn-default">User edit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection