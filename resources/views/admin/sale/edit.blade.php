@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sale
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Province
                        <small>Edit</small></h4>
                    </div>
                    <div class="modal-body">
                        <form action="admin/sale/edit/{{$sale->id}}" method="POST" id="form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Name :* <span id="error-name" class="errors"></span></label>
                                <input class="form-control" name="name" value="{{ $sale->name }}" placeholder="Please Enter Name Sale" />
                            </div>
                            <div class="form-group">
                                <label>Precent :* <span id="error-sale_precent" class="errors"></span></label>
                                <input class="form-control" name="sale_precent" value="{{ $sale->sale_precent }}" placeholder="Please Enter Precent" />
                            </div>
                            <button type="submit" class="btn btn-default">Edit Province </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection