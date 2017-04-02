@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">

    <div class="container">
    <div id="edit-traffic-form">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit traffic
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <form action="{{URL::to('/')}}/admin/traffic/edit/{{$dataTrafficFind->id}}" id="traffic-form-edit" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                      
                    <div class="form-group">
                        <label>name</label>
                        <input class="form-control" value="{{$dataTrafficFind->name}}" name="name" placeholder="Please Enter name" required />
                        <span id="error-traffic" class="error-form"></span>
                    </div>
                    <button type="submit" class="btn btn-default">traffic edit</button>

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