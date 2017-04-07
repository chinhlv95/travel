<div class="container">
                <div class="filter">
                    <div class="title-filter">
                        <h3><span class="glyphicon glyphicon-search"></span> Tìm Tour</h3>
                    </div>
                    <div class="filter-content">
                        <form class="form-inline" action="{{URL::to('/')}}/filter" method="get">
                            <div class="form-group">
                                <select class="selectpicker" data-size="4" data-live-search="true" name="province">
                                    <option value=""  data-icon="glyphicon-map-marker">Điểm Khởi hành</option>
                                   @foreach ($dataProvince as $key => $value)
                                    <option  value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" data-size="3" id="cat-tour" data-live-search="true" name="cate">
                                    <option value="" >-Chọn tuyến-</option>
                                     @foreach ($dataCategories as $key => $value)
                                    <option  value="{{$value['id']}}">{{$value['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" data-size="4" id="destination-tour" data-live-search="true" name="destination">
                                    <option  value="" data-icon="glyphicon-map-marker">Điểm đến</option>
                                     @foreach ($dataDestination as $key => $value)
                                    <option  value="{{$value['id']}}">{{$value['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control start-date" value="{{old('start')}}" data-toggle="tooltip" title="Ngày khởi đầu" name="start">
                            </div>
                            <div class="form-group">
                                <select class="selectpicker" data-size="4" data-live-search="true" name="price">
                                    <option value=""  data-icon="glyphicon-usd">Chọn giá tour</option>
                                      @foreach ($dataPriceRange as $key => $value)
                                    <option  value="{{$value['from_price']."-".$value['to_price']}}">{{$value['from_price']."-".$value['to_price']."(đ)"}}</option>
                                    @endforeach
                                   
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default search">Tìm Kiếm</button>
                        </form>
                    </div>
                </div>
            </div>