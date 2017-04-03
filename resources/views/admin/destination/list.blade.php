@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Destination
                    <small>List</small>
                </h1>
            </div>
            <div class="col-lg-12">
                <div class="alert alert-success alert-show">
                    
                </div>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-9">
                <button type="button" class="btn btn-info btn-md add" data-name="destination" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> ADD</button>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" name="search" placeholder="search..." class="form-control" id="search">
                    <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    </div>
                </div>
                <div class="dataTables">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-detail">
                        <thead>
                            <tr align="center">
                                <th>Name</th>
                                <th>Status</th>
                                <th>Category</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $desti as $desti)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $desti->name }}</td>
                                <td>
                                    @if( $desti->status == 0 )
                                    {{ "Private" }}
                                    @else
                                    {{ "Published" }}
                                    @endif
                                </td>
                                <td>{{ $desti->category->name }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="del" data-name="destination" data-id="{{ $desti->id }}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="" data-id="{{ $desti->id }}" class="edit" data-name="destination" data-toggle="modal" data-target="#myModal">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection