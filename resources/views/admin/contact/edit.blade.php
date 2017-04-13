@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">

    <div class="container">
    <div id="edit-contact-form">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    EDIT contact
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <form action="{{URL::to('/')}}/admin/contact/edit/{{$dataContactFind->id}}" id="contact-form-edit" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                    <div class="form-group">
                        <label>name</label>
                        <input class="form-control" name="name" placeholder="Please Enter name" value="{{$dataContactFind->name}}" required />
                        <span id="error-name" class="error-form"></span>
                    </div>
                    
                    <div class="form-group">
                        <label>phone</label>
                        <input class="form-control" name="phone" value="{{$dataContactFind->phone}}" type="text" placeholder="Please Enter phone" required />
                         <span id="error-phone" class="error-form"></span>
                    </div>
                     <div class="form-group">
                      <label for="address">Address:</label>
                      <textarea class="form-control" rows="5" class="address" id="address" name="address" required>{{$dataContactFind->address}}</textarea> 
                      <span id="error-address"></span>
                    </div>
                   
                    <button type="submit" class="btn btn-default">Contact edit</button>
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