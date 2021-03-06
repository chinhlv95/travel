@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">

    <div class="container">
    <div id="add-traffic-form">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add traffic
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <form action="{{URL::to('/')}}/admin/traffic/add" id="traffic-form" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                      
                    <div class="form-group">
                        <label>name</label>
                        <input class="form-control" name="name" placeholder="Please Enter name" required />
                        <span id="error-traffic" class="error-form"></span>
                    </div>
                    
                   
                    <button type="submit" class="btn btn-default">traffic Add</button>
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