@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Destination
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Destination
                        <small>Edit</small></h4>
                    </div>
                    <div class="modal-body">
                        <form action="admin/destination/edit/{{$desti->id}}" method="POST" id="form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Destination :* <span id="error-name" class="errors"></span></label>
                                <input class="form-control" name="name" value="{{ $desti->name }}" placeholder="Please Enter Destination" />
                            </div>
                            <div class="form-group">
                                <label>Destination Status:</label>
                                <label class="radio-inline">
                                    <input name="status" value="0" 
                                    @if($desti->status == 0)
                                    {{ "checked" }}
                                    @endif
                                    type="radio">Private
                                </label>
                                <label class="radio-inline">
                                    <input name="status" value="1"
                                    @if($desti->status == 1)
                                    {{ "checked" }}
                                    @endif
                                    type="radio">Published
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Category: </label>
                                <select class="form-control" name="cate_id">
                                    @foreach( $cate as $cate)
                                        <option 
                                        @if( $cate->id == $desti->cate_id)
                                            {{"selected"}}
                                        @endif
                                        value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Edit Destination </button>
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