
<div class="main-menu">
                <div class="container">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">TRANG CHỦ</a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav">
                                    @foreach ($dataCategories as $key => $value)
                                         <li><a href="{{URL::to('/')}}/category/{{$value['id']}}/{{$CategoryRepository->convert_vi_to_en($value['name'])}}.html" title="{{$value['name']}}">{{$value['name']}}</a></li>
                                     @endforeach 
                                    
                                 
                                    <li><a href="#">CẨM NANG DU LỊCH</a></li>
                                    <li><a href="#">LIÊN HỆ</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <div class="mainmenu_support">
                                        <span><i class="fa fa-phone"></i> Tư vấn miễn phí</span>
                                        <div>1800 555539 - 0909.723.615</div>
                                    </div>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </div>
            </div>