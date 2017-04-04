@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Order
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div id="content-table-pay">

            <table class="table table-striped table-bordered " id="dataTables-example">
                <thead>
                <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">

                    <tr align="center">
                        <th></th>
                        <th>Id order</th>
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
                 <tr class="order-tr success">
                 <td><i class="fa fa-eye" aria-hidden="true"></i></td>
                    <td>HD:01</td>
                    <td>aa</td>
                    <td>aa</td>
                    <td>aa</td>
                    <td>aa</td>
                    <td>aa</td>
                    <td>aa</td>
                    <td>Đã ký hợp đồng</td>
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
                              <p>Tour du lịch hà nội-Hồ chí minh</p>
                               <p>Ngày khởi hành:30/04/2017</p>
                               <p>số lượng :10(người)</p>
                               <p>Giá:9,000,000 đ</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                           <div class="customer-order">
                            <h4>information customer</h4>
                            <div class="customer-order-info">
                              <p><span>Fullname:</span>Trần Chung Kiên</p>
                              <p><span>Email:</span>kienkienutc95@gmail.com</p>
                              <p><span>Phone:</span>0964953029</p>
                              <p><span>Birthday:</span>08/04/1995</p>
                              <p><span>Gender</span>fmale</p>
                              <p><span>Address</span>:Hà Nội</p>
                              <p><span>note</span>:#</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="list-toures">
                    <h4>list tourers</h4>
                     <div class="add-more-touers">
                        <a href="" class="btn-add">
                          Add tourers
                        </a>
                      </div>
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

                          <tr>
                            <td>1</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="delete-contact" => Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="javascript:void(0)" class="update-contact" >Edit</a></td>
                          </tr>
                           <tr>
                            <td>2</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                           <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="delete-contact" => Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="javascript:void(0)" class="update-contact" >Edit</a></td>
                          </tr>
                           <tr>
                            <td>3</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="delete-contact" => Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="javascript:void(0)" class="update-contact" >Edit</a></td>
                          </tr>
                           <tr>
                            <td>4</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="delete-contact" => Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="javascript:void(0)" class="update-contact" >Edit</a></td>
                          </tr>
                          <tr>
                            <td colspan="7">
                              Total
                            </td>
                            <td>36,000,000đ</td>
                          </tr>
                        </tbody>
                      </table>
                     
                    </div>
                  </td>
                 </tr>
                 <tr class="order-tr processing">
                     <td><i class="fa fa-eye" aria-hidden="true"></i></td>
                    <td>HD:02</td>
                    <td>aa</td>
                    <td>aa</td>
                    <td>aa</td>
                    <td>aa</td>
                    <td>aa</td>
                    <td>aa</td>
                    <td>Đang xử lý</td>
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
                              <p>Tour du lịch hà nội-Hồ chí minh</p>
                               <p>Ngày khởi hành:30/04/2017</p>
                               <p>số lượng :10(người)</p>
                               <p>Giá:9,000,000 đ</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                           <div class="customer-order">
                            <h4>information customer</h4>
                            <div class="customer-order-info">
                              <p><span>Fullname:</span>Trần Chung Kiên</p>
                              <p><span>Email:</span>kienkienutc95@gmail.com</p>
                              <p><span>Phone:</span>0964953029</p>
                              <p><span>Birthday:</span>08/04/1995</p>
                              <p><span>Gender</span>fmale</p>
                              <p><span>Address</span>:Hà Nội</p>
                              <p><span>note</span>:#</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="list-toures">
                    <h4>list tourers</h4>
                     <div class="add-more-touers">
                        <a href="" class="btn-add">
                          Add tourers
                        </a>
                      </div>
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
                          <tr>
                            <td>1</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="delete-contact" => Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="javascript:void(0)" class="update-contact" >Edit</a></td>
                          </tr>
                           <tr>
                            <td>2</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                           <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="delete-contact" => Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="javascript:void(0)" class="update-contact" >Edit</a></td>
                          </tr>
                           <tr>
                            <td>3</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="delete-contact" => Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="javascript:void(0)" class="update-contact" >Edit</a></td>
                          </tr>
                           <tr>
                            <td>4</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td>aa</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" class="delete-contact" => Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="javascript:void(0)" class="update-contact" >Edit</a></td>
                          </tr>
                          <tr>
                            <td colspan="7">
                              Total
                            </td>
                            <td>36,000,000đ</td>
                          </tr>
                        </tbody>
                      </table>
                     
                    </div>
                  </td>
                 </tr>

                  
                </tbody>
            </table>
         
              </div>
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection