@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Price Range
                </h1>
            </div>
           <div id="add">
           <div class="row">
               <div class="col-md-3">
                    <a href="javascript:void(0)"  id="add-price-range" class="btn-add"> <i class="fa fa-plus" aria-hidden="true"></i> Add Price Ranges</a>
               </div>
           </div>
           </div>
           <!-- modal -->
          <div id="modal-price-range" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body" id="modal-content-price-range">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
            <!-- /.col-lg-12 -->
            <div id="content-table-price-range">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">

                    <tr align="center">
                        <th>STT</th>
                        <th>from price</th>
    
                        <th>to price</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
            <?php $i=1 ?>
               @foreach($dataPriceRangeList as $key => $value)
                     <tr class="odd gradeX" align="center">
                        <td>{{$i}}</td>
                        <td>{{$value->from_price}}</td>  
                        <td>{{$value->to_price}}</td>
                    
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="delete-price-range" id="{{$value->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="javascript:void(0)" class="update-price-range" id="{{$value->id}}">Edit</a></td>
                    </tr>
                    <?php $i++ ?>
                @endforeach
                   
                </tbody>
            </table>
            <div id="pagination-price-range">
            {{$dataPriceRangeList->links()}}
            </div>
              </div>
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection