@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tour
                    <small>Detail</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h1 class="modal-title">Tour
                        <small>Detail</small></h1>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="tab" href="#tour">Tour Detail</a></li>
                        <li><a data-toggle="tab" href="#more">More</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tour" class="tab-pane fade in active">
                                <h3 class="head">Tour Name:</h3>
                                <div>{{$tour->name}}</div>
                                <h3 class="head">Journey:</h3>
                                <div>{{$tour->journey}}</div>
                                <h3 class="head">Content:</h3>
                                <div>{{$tour->content}}</div>
                                <h3 class="head">Description:</h3>
                                <div>{{$tour->description}}</div>
                                <h3 class="head">Note:</h3>
                                <div>{{$tour->note}}</div>
                                <h3 class="head">Quantity:</h3>
                                <div>{{$tour->quantity}} People</div>
                                <h3 class="head">Booked:</h3>
                                <div>{{$tour->booked}} People</div>
                                <h3 class="head">Image:</h3>
                                <div><img width="30%" src="{{$tour->image}}" alt="" title=""></div>
                                <h3 class="head">Price:</h3>
                                <div>{{number_format($tour->price, 0 , ",", "." )}} VND</div>
                                <h3 class="head">Sale:</h3>
                                <div>{{$tour->sale->sale_precent}}%</div>
                                <h3 class="head">Province:</h3>
                                <div>{{$tour->province->name}}</div>
                                <h3 class="head">Destination:</h3>
                                <div>{{$tour->destination->name}}</div>
                                <h3 class="head">Traffic:</h3>
                                <div>{{$tour->traffic->name}}</div>
                                <h3 class="head">Start Date:</h3>
                                <div>{{$tour->start_date}}</div>
                                <h3 class="head">End Date:</h3>
                                <div>{{$tour->end_date}}</div>
                            </div>
                            <div id="more" class="tab-pane fade">
                                <h3 class="head">Status:</h3>
                                <div>
                                    @if($tour->status == 0)
                                    {{ "Private" }}
                                    @else
                                    {{ "Published" }}
                                    @endif
                                </div>
                                <h3 class="head">Hot:</h3>
                                <div>
                                    @if($tour->is_hot == 0)
                                    {{ "Not hot" }}
                                    @else
                                    {{ "Hot" }}
                                    @endif
                                </div>
                                <h3 class="head">Meta key:</h3>
                                <div>{{$tour->meta_key}}</div>
                                <h3 class="head">Name Seo:</h3>
                                <div>{{$tour->name_seo}}</div>
                                <h3 class="head">Tag:</h3>
                                <div>{{$tour->tag}}</div>
                                <h3 class="head">Author:</h3>
                                <div>{{$tour->user->name}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection