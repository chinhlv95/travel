@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sale
                    <small>List</small>
                </h1>
            </div>
            <div class="col-lg-12">
                <div class="alert alert-success alert-show">
                    
                </div>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-9">
                <button type="button" class="btn btn-info btn-md add" data-name="sale" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> ADD</button>
            </div>
            <div class="col-md-12">
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    </div>
                </div>
                <div id="dataTables">
                    <div id="dataTables-detail">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr align="center">
                                    <th>Name</th>
                                    <th>Sale Precent</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $sales as $sale)
                                <tr class="odd gradeX" align="center">
                                    <td>{{ $sale->name }}</td>
                                    <td>{{ $sale->sale_precent }}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="del" data-name="sale" data-id="{{ $sale->id }}"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="" data-id="{{ $sale->id }}" class="edit" data-name="sale" data-toggle="modal" data-target="#myModal">Edit</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div id="pagination" data-name="sale">
                        {{$sales->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection