@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">

    <div class="container">
    <div id="add-user-form">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add user
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <form action="{{URL::to('/')}}/admin/user/add" id="user-form" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                      <div class="alert alert-success alert-user">
                         
                        </div>
                    <div class="form-group">
                        <label>username</label>
                        <input class="form-control" name="name" placeholder="Please Enter username" />
                        <span id="error-name"></span>
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input class="form-control" name="email" type="email" placeholder="Please Enter email" />
                         <span id="error-email"></span>
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input class="form-control" type="password" name="password" placeholder="Please Enter password" />
                    </div>
                    <div class="form-group">
                        <label>role</label>
                        <label class="radio-inline">
                            <input name="level" value="2"  type="radio">Manager
                        </label>
                        <label class="radio-inline">
                            <input name="level" value="3" type="radio">Member
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">User Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
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