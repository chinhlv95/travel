@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">

    <div class="container">
    <div id="add-contact-form">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add contact
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <form action="{{URL::to('/')}}/admin/contact/add" id="contact-form" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                      <div class="alert alert-success alert-contact">
    
                        </div>
                    <div class="form-group">
                        <label>name</label>
                        <input class="form-control" name="name" placeholder="Please Enter name" required />
                        <span id="error-name" class="error-form"></span>
                    </div>
                    
                    <div class="form-group">
                        <label>phone</label>
                        <input class="form-control" name="phone" type="text" placeholder="Please Enter phone" required />
                         <span id="error-phone" class="error-form"></span>
                    </div>
                     <div class="form-group">
                      <label for="address">Address:</label>
                      <textarea class="form-control" rows="5" class="address" id="address" name="address" required></textarea>
                      <span id="error-address"></span>
                    </div>
                   
                    <button type="submit" class="btn btn-default">Contact Add</button>
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