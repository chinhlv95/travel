@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Category
                        <small>Edit</small></h4>
                    </div>
                    <div class="modal-body">
                        <form action="admin/cate/edit/{{$cate->id}}" method="POST" id="form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Category Name:* <span id="error-name" class="errors"></span></label>
                                <input class="form-control" name="name" value="{{ $cate->name }}" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Meta Key:* <span id="error-meta_key" class="errors"></span></label>
                                <input class="form-control" name="meta_key" value="{{ $cate->meta_key }}" placeholder="Please Enter Meta Key" />
                            </div>
                            <div class="form-group">
                                <label>Category Status:</label>
                                <label class="radio-inline">
                                    <input name="status" value="0" 
                                    @if($cate->status == 0)
                                    {{ "checked" }}
                                    @endif
                                    type="radio">Private
                                </label>
                                <label class="radio-inline">
                                    <input name="status" value="1"
                                    @if($cate->status == 1)
                                    {{ "checked" }}
                                    @endif
                                    type="radio">Published
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Category Edit</button>
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