@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tour
                    <small>List</small>
                </h1>
            </div>
            <div class="col-lg-12">
                <div class="alert alert-success alert-show">
                    
                </div>
                @if(session('message'))
                    <div class="alert alert-success alert-flash">
                    {{ session('message') }}
                    </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-md-9">
                <a href="admin/tour/add" title="" class="btn btn-info btn-md add-tour"><i class="fa fa-plus-circle" aria-hidden="true"></i> ADD</a>

                <!-- Dropdown Filter -->
                @include('admin.tour.filter')

            </div>

            <div class="col-md-3">
                <div class="input-group">
                    <input data-name="tour" type="text" name="search" placeholder="search..." class="form-control" id="search-ajax">
                    <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                    </div>
                </div>
                <div id="mySlide">
                </div>
                <div id="dataTables">
                    <div id="dataTables-detail">
                        <table class="table table-striped table-bordered table-hover table-tour">
                            <thead>
                                <tr align="center">
                                    <th>Name</th>
                                    <th>Journey Planner</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>More</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $tours as $tour)
                                <tr class="odd gradeX" align="center">
                                    <td valign="center">{{ $tour->name }}</td>
                                    <td valign="center">{!! $tour->journey !!}</td>
                                    <td valign="center">{{ $tour->quantity }} people</td>
                                    <td valign="center">{{number_format($tour->price, 0 , ",", "." )}} VND</td>
                                    <td valign="center"><button type="button" class="btn btn-info btn-sm detail" data-toggle="modal" data-id="{{$tour->id}}" data-target="#myModal"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i> More</button></td>

                                    <td class="center" valign="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="del" data-name="tour" data-id="{{ $tour->id }}"> Delete</a></td>
                                    <td class="center" valign="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tour/edit/{{$tour->id}}" title="" ">Edit</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div id="pagination-search" data-name="tour">
                        {{$tours->links()}}
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