@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">

    <div class="container">
    <div id="add-price-range-form">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Price Range
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <form action="{{URL::to('/')}}/admin/price-range/add" id="price-range-form" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                      
                    <div class="form-group">
                        <label>From price</label>
                        <input class="form-control" name="from_price" placeholder="Please Enter from price" required />
                        <span id="error-from_price" class="error-form"></span>
                    </div>
                    
                    <div class="form-group">
                        <label>To price</label>
                        <input class="form-control" name="to_price" type="text" placeholder="Please Enter phone" required />
                         <span id="error-to_price" class="error-form"></span>
                    </div>
                    <button type="submit" class="btn btn-default">price range Add</button>
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