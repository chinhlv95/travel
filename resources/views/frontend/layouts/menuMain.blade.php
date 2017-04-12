
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
                                <a class="navbar-brand" href="{{URL::to('/')}}">TRANG CHỦ</a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                                <ul class="nav navbar-nav">
                                    @for( $i=0; $i<count($dataCategories); $i++ )
                                         <li class="dropdown">
                                         <a href="{{URL::to('/')}}/category/{{$dataCategories[$i]['id']}}/{{$CategoryRepository->convert_vi_to_en($dataCategories[$i]["name"])}}.html" title="{{$dataCategories[$i]["name"]}}" >{{$dataCategories[$i]["name"]}}</a>
                                            <ul class="dropdown-menu">
                                             @for( $j=0; $j<count($dataDestination); $j++ )
                                             @if( $dataDestination[$j]['cate_id'] == $dataCategories[$i]['id'] )
                                              <li><a href="{{URL::to('/')}}/destination/{{$dataDestination[$j]['id']}}">{{$dataDestination[$j]['name']}}</a></li>
                                              @endif
                                              @endfor
                                            </ul>
                                         </li>
                                     @endfor
                                    <li><a href="{{URL::to('/')}}/lien-he">LIÊN HỆ</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <div class="mainmenu_support">
                                        <span><i class="fa fa-phone"></i> Tư vấn miễn phí</span>
                                        <div>01665.431.893 - 0123.456.789</div>
                                    </div>
                                </ul>
                            <!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </div>
            </div>