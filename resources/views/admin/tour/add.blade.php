@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tour
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                <form action="admin/tour/add" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="col-lg-9">
                        <div class="form-group">
                            <label>Tour Name:* <span id="error-name" class="errors">
                            @if($errors->has('name'))
                            {{$errors->first('name')}}
                            @endif
                            </span></label>
                            <input value="{{old('name')}}" class="form-control" name="name" placeholder="Please Enter Tour Name" />
                        </div>
                        <div class="form-group">
                            <label>Journey:* <span id="error-journey" class="errors">
                            @if($errors->has('journey'))
                            {{$errors->first('journey')}}
                            @endif
                            </span></label>
                            <input value="{{old('journey')}}" class="form-control" name="journey" placeholder="Please Enter Journey" />
                        </div>
                        <div class="form-group">
                            <label>Content:* <span id="error-content" class="errors">
                            @if($errors->has('content'))
                            {{$errors->first('content')}}
                            @endif
                            </span></label>
                            <textarea class="tinymce" name="content">{{old('content')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Description:* <span id="error-description" class="errors">
                            @if($errors->has('description'))
                            {{$errors->first('description')}}
                            @endif
                            </span></label>
                            <textarea class="tinymce" name="description">{{old('description')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Note: <span id="error-note" class="errors"></span></label>
                            <textarea class="tinymce" name="note">{{old('note')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Quantity:* <span id="error-quantity" class="errors">
                            @if($errors->has('quantity'))
                            {{$errors->first('quantity')}}
                            @endif
                            </span></label>
                            <input type="number" value="{{old('quantity')}}" class="form-control" name="quantity" placeholder="Please Enter Quantity" />
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="booked" value="0"/>
                        </div>
                        <div class="form-group">
                            <label>Image:* <span id="error-image" class="errors">
                            @if($errors->has('image'))
                            {{$errors->first('image')}}
                            @endif
                            </span></label>
                            <div><img id="image" 
                            @if(old('image') != "")
                            width="150px" height="100px"
                            @endif
                            src="{{old('image')}}" ></div>
                            <input type="text" value="{{old('image')}}" class="form-control" id="image-tour" name="image" placeholder="Please Insert Tour Image" />
                        </div>
                        <div class="form-group">
                            <label>Price(VND):* <span id="error-price" class="errors">
                            @if($errors->has('price'))
                            {{$errors->first('price')}}
                            @endif
                            </span></label>
                            <input type="number" value="{{old('price')}}" class="form-control" name="price" placeholder="Please Enter Price" />
                        </div>
                        <div class="form-group">
                            <label>Sale(%): <span id="error-sale" class="errors"></span></label>
                            <select class="form-control" name="sale_id">
                                @foreach( $sale as $sale)
                                    <option value="{{$sale->id}}"
                                    {{(old("sale_id") == $sale->id ? "selected":"") }}
                                    >{{$sale->sale_precent}}%</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Province: <span id="error-province" class="errors"></span></label>
                            <select class="form-control" name="province_id">
                                @foreach( $province as $province)
                                    <option value="{{$province->id}}"
                                    {{(old("province_id") == $province->id ? "selected":"") }}
                                    >{{$province->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Destination: <span id="error-destination" class="errors"></span></label>
                            <select class="form-control" name="destination_id">
                                @foreach( $desti as $desti)
                                    <option value="{{$desti->id}}"
                                    {{(old("destination_id") == $desti->id ? "selected":"") }}
                                    >{{$desti->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Traffic: <span id="error-traffic" class="errors"></span></label>
                            <select class="form-control" name="traffic_id">
                                @foreach( $traffic as $traffic)
                                    <option value="{{$traffic->id}}"
                                    {{(old("traffic_id") == $traffic->id ? "selected":"") }}
                                    >{!!$traffic->name!!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Start Date:* <span id="error-start_date" class="errors">
                            @if($errors->has('start_date'))
                            {{$errors->first('start_date')}}
                            @endif
                            </span></label>
                            <input type="date" value="{{old('start_date')}}" class="form-control" name="start_date" />
                        </div>
                        <div class="form-group">
                            <label>End Date:* <span id="error-end_date" class="errors">
                            @if($errors->has('end_date'))
                            {{$errors->first('end_date')}}
                            @endif
                            </span></label>
                            <input type="date" value="{{old('end_date')}}" class="form-control" name="end_date" />
                        </div>
                        <div class="form-group">
                            <label>Status: </label> <br>
                            <label class="radio-inline">
                                <input name="status" value="0" checked
                                {{(old("status") == 0 ? "checked":"") }}
                                type="radio">Private
                            </label>
                            <label class="radio-inline">
                                <input name="status" value="1"
                                {{(old("status") == 1 ? "checked":"") }} 
                                type="radio">Published
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Hot: </label> <br>
                            <label class="radio-inline">
                                <input name="is_hot" value="0" checked
                                {{(old("is_hot") == 0 ? "checked":"") }}
                                type="radio">Not Hot
                            </label>
                            <label class="radio-inline">
                                <input name="is_hot" value="1"
                                {{(old("is_hot") == 1 ? "checked":"") }}
                                type="radio">Hot
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Meta Key: <span id="error-meta_key" class="errors"></span></label>
                            <input type="text" value="{{old('meta_key')}}" class="form-control" name="meta_key" placeholder="Please Enter Meta Key" />
                        </div>
                        <div class="form-group">
                            <label>Name Seo: <span id="error-name_seo" class="errors"></span></label>
                            <input type="text" value="{{old('name_seo')}}" class="form-control" name="name_seo" placeholder="Please Enter Name Seo" />
                        </div>
                        <div class="form-group">
                            <label>Tag: <span id="error-tag" class="errors"></span></label>
                            <input type="text" value="{{old('tag')}}" class="form-control" name="tag" placeholder="Please Enter Tag" />
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div><h3>Image Gallery</h3></div>
                        <div class="form-group">
                            <input type="hidden" id="hidden-tour" name="image-hidden">
                        </div>
                        <div class="form-group">
                            <img id="image_0" src="" >
                            <input type="text" placeholder="Inser image" count="0" id="imagetour_0" value="" class="form-control imagepro" name="imagepro[]"/>
                            <a href="#" class="btn-danger btn-circle icon_del remove_field"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        <div id="custom-div"></div>
                        <button type="button" class="btn btn-info btn-sm add_image_field"><i class="fa fa-plus-circle" aria-hidden="true"></i> ADD</button>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-default">Add Tour</button>
                        <a href="admin/tour/list" class="btn btn-default" title="">Back</a>
                    </div>
                <form>
                <div class="modal fade" id="modal-tour" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content" style="width: 900px;">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <h4 class="modal-title" id="myModalLabel">Tour Image</h4>
                        </div>
                        <div class="modal-body">
                           <iframe  width="100%" height="550" frameborder="0" src="{{URL::to('/')}}/filemanager/dialog.php?type=1&field_id=image-tour">
                          </iframe>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="modal fade" id="imagetour" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content" style="width: 900px;">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <h4 class="modal-title" id="myModalLabel">Tour Image</h4>
                        </div>
                        <div class="modal-body">
                           <iframe  width="100%" height="550" frameborder="0" src="{{URL::to('/')}}/filemanager/dialog.php?type=1&field_id=hidden-tour">
                          </iframe>
                        </div>
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