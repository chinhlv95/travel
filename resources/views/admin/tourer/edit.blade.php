@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container">
    <div id="edit-tourer-form">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Tourers
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <form action="{{URL::to('/')}}/admin/tourer/edit/{{$dataTourerFind->id}}" id="tourer-form-update" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                    
                    <div class="form-group">
                        <label>Full name</label>
                        <input class="form-control" value="{{$dataTourerFind->fullname}}" name="fullname" placeholder="Please Enter fullname" />
                        <span id="error-fullname" class="error-form"></span>
                    </div>
                    <div class="form-group">
                        <label>Birthday</label>
                        <input class="form-control" name="birthday" value="{{$dataTourerFind->birthday}}" type="date" placeholder="Please Enter birthday" />
                         <span id="error-birthday" class="error-form"></span>
                    </div>
                      <div class="form-group">
                        <label>Gender</label>
                          <label class="radio-inline">
                            <input  name="gender" value="1"  type="radio" {{($dataTourerFind->gender==1)?"checked":""}} >male
                        </label>
                         <label class="radio-inline">
                            <input  name="gender" value="0" type="radio" {{($dataTourerFind->gender==0)?"checked":""}} >female
                        </label>
                    </div>

                     <div class="form-group">
                        <label>phone</label>
                        <input class="form-control" name="phone" value="{{$dataTourerFind->phone}}" type="number" placeholder="Please Enter phone" />
                         <span id="error-phone" class="error-form"></span>
                    </div>
                     <div class="form-group">
                        <label>address</label>
                        <input class="form-control" name="address" value="{{$dataTourerFind->address}}" type="text" placeholder="Please Enter address" />
                         <span id="error-address" class="error-form"></span>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-default">Tourer edit</button>
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