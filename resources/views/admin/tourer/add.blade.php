@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container">
    <div id="add-tourer-form">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Tourers
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <form action="{{URL::to('/')}}/admin/tourer/add" id="tourer-form-add" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                   <input type="hidden" name="order_id" id="order-tour" value="{{$orderId}}">
                    <div class="form-group">
                        <label>Full name</label>
                        <input class="form-control" value="" name="fullname" placeholder="Please Enter fullname" required />
                        <span id="error-fullname" class="error-form"></span>
                    </div>
                    <div class="form-group">
                        <label>Birthday</label>
                        <input class="form-control" name="birthday" value="" type="date" placeholder="Please Enter birthday" required/>
                         <span id="error-birthday" class="error-form"></span>
                    </div>
                      <div class="form-group">
                        <label>Gender</label>
                          <label class="radio-inline">
                            <input  name="gender" value="1" checked="" type="radio"  >male
                        </label>
                         <label class="radio-inline">
                            <input  name="gender" value="0" type="radio" >female
                        </label>
                    </div>

                     <div class="form-group">
                        <label>phone</label>
                        <input class="form-control" name="phone" value="" type="number" placeholder="Please Enter phone" required />
                         <span id="error-phone" class="error-form"></span>
                    </div>
                     <div class="form-group">
                        <label>address</label>
                        <input class="form-control" name="address" value="" type="text" placeholder="Please Enter address" required />
                         <span id="error-address" class="error-form"></span>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-default">Tourer add</button>
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