@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
       <!-- modal -->
       <div id="modal-order" class="modal fade" role="dialog">
         <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tourer</h4>
          </div>
          <div class="modal-body" id="contet-modal-order">
            
          </div>
        </div>
      </div>
       </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Order
                </h1>
            </div>
            <!-- /.col-lg-12 -->
           <div id="content-table-order">
           <div class="filter">
             <div class="row">
             <div class="col-md-6 col-md-offset-6">
              <div class="form-inline">
              <div class="form-group">
                <label for="name">Tour:</label>
                <input type="text" placeholder="choose tour..." class="form-control" id="name-tour">
              </div>
              <div class="form-group">
              <label for="sel1">Status:</label>
              <select class="form-control" id="order-status">
                <option value="">-choose-</option>
                <option value="0">processing</option>
                <option value="1">success</option>
              </select>
            </div>
              <button type="button" id="filter-order" class="btn btn-default"><i class="fa fa-filter" aria-hidden="true"></i> filter</button>
            </div>
            </div>
             </div>
           </div>
           <div id="content-order-tabel">
            <table class="table table-striped table-bordered " id="dataTables-example">
                <thead>
                <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                    <tr align="center">
                        <th></th>
                        <th>Id</th>
                        <th>tour</th>
                        <th>code</th>
                        <th>quantity touers</th>
                        <th>sale</th>
                        <th>price</th>
                        <th>pay</th>
                        <th>status</th> 
                    </tr>
                </thead>
                <tbody>
                @foreach ($dataOrder as $key => $order)
                <?php 
                 $dataSale=$SaleRepository->find($order->id);
                 ?>
                 <tr class="order-tr {{($order->status)?'success':'processing'}}">
                 <td><i class="fa fa-eye" aria-hidden="true"></i></td>
                    <td>{{$order->order_id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->code}}</td>
                    <td>{{$order->quantity_tourer}}</td>
                    <td>{{$dataSale->sale_precent."(%)"}}</td>
                    <td>{{number_format((int)($order->price)*(1-(int)($dataSale->sale_precent)/100))."đ"}} </td>
                    <td>{{$order->pay_name}}</td>
                    <td>{{($order->status)?'success':'processing'}}</td>
                    @if($order->status==0)
                    <td><a href="javascript:void(0)" data-toggle="tooltip" title="update status" class="update-order" data-id="{{$order->order_id}}"><i class="fa fa-refresh" aria-hidden="true"></i></a></td>
                    @endif
                 </tr>
                  <tr class="order-show">
                  <td colspan="9">
                    <div class="title-order">
                      <h3>Information order detail</h3>
                    </div>
                    <div class="customer-tour">
                      <div class="row">
                        <div class="col-md-6 customer-tour-item">
                              <h4>information tour</h4>
                          <div class="tour-order">
                            <div class="tour-order-left">
                              <img src="frontend/assets/images/item1.jpg" alt="">
                            </div>
                            <div class="tour-order-right">
                              <p>Tour:{{$order->name}}</p>
                               <p>start date:{{date('d-m-Y', strtotime($order->start_date))}}</p>
                               <p>Booked:{{$order->quantity_tourer."(người)"}}</p>
                               <p>Price:{{number_format((int)($order->price)*(1-(int)($dataSale->sale_precent)/100))."đ"}} </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                           <div class="customer-order">
                            <h4>information customer</h4>
                            <div class="customer-order-info">
                              <p><span>Fullname:</span>{{$order->fullname}}</p>
                              <p><span>Email:</span>{{$order->email}}</p>
                              <p><span>Phone:</span>{{$order->phone}}</p>
                              <p><span>Birthday:</span>{{date('d-m-Y', strtotime($order->birthday))}}5</p>
                              <p><span>Gender</span>{{($order->gender)?"male":"female"}}</p>
                              <p><span>Address</span>{{$order->address}}</p>
                              <p><span>note</span>{{$order->note}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="list-toures">
                    <h4>list tourers</h4>
                    @if($order->status==0)
                     <div class="add-more-touers">
                        <a href="javascript:void(0)" data-order="{{$order->order_id}}" data-booked="{{$order->booked}}" data-quantity="{{$order->quantity}}" id="add-tourer" class="btn-add">
                          Add tourers
                        </a>
                      </div>
                      @endif
                      <div id="content-table-tourer">
                      <table class="table table-striped table-bordered ">
                        <thead>
                        <th></th>
                        <th>Fullname</th>
                        <th>Birthday</th>
                        <th>gender</th>
                        <th>phone</th>
                        <th>address</th>
                        <th colspan="2"></th>
                        </thead>
                        <tbody>
                           <?php 
                          $dataListTourer=$OrderRepository->getListTourer($order->order_id);
                          $i=1;
                          $total=0;
                            ?>
                            @foreach ($dataListTourer as $key => $tourer)
                            <tr>
                            <td>{{$i}}</td>
                            <td>{{$tourer->fullname}}</td>
                            <td>{{$tourer->birthday}}</td>
                            <td>{{($tourer->gender)?"Nam":"Nữ"}}</td>
                            <td>{{$tourer->phone}}</td>
                            <td>{{$tourer->address}}</td>
                            @if($order->status==0)
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" data-tour="{{$order->tour_id}}" data-order="{{$order->order_id}}" data-id="{{$tourer->id}}"  class="delete-tourers" => Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="javascript:void(0)" id="{{$tourer->id}}" class="update-tourers" >Edit</a></td>
                            @endif
                          </tr>
                          <?php
                           $total+=((int)($order->price)*(1-(int)($dataSale->sale_precent)/100));
                           $i++ ?>
                           @endforeach
                          <tr>
                            <td colspan="7">
                              Total
                            </td>
                            <td>{{number_format($total)."đ"}}</td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                     
                    </div>
                  </td>
                 </tr>
                 
               @endforeach
                  
                </tbody>
            </table>
              <div id="pagination-order">
                {{$dataOrder->links()}}
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