<div class="heading1 ">
    <div class="dropdown">
        <div class="oder" data-toggle="dropdown">Categories
        <span class="caret"></span></div>
        <ul class="dropdown-menu">
        <li><a href="admin/tour/list">All</a></li>
        @foreach($cates as $cate)
            <li><a href="admin/tour/category/{{$cate->id}}" id="{{$cate->id}}"> {{$cate->name}} </a></li>
        @endforeach
        </ul>
    </div>
    <div class="dropdown">
        <div class="oder" data-toggle="dropdown">Provinces
        <span class="caret"></span></div>
        <ul class="dropdown-menu">
        <li><a href="admin/tour/list">All</a></li>
        @foreach($provinces as $province)
            <li><a href="admin/tour/province/{{$province->id}}" id="{{$province->id}}">{{$province->name}}</a></li>
        @endforeach
        </ul>
    </div>
    <div class="dropdown">
        <div class="oder" data-toggle="dropdown">Destinations
        <span class="caret"></span></div>
        <ul class="dropdown-menu">
        <li><a href="admin/tour/list">All</a></li>
        @foreach($destis as $desti)
            <li><a href="admin/tour/destination/{{$desti->id}}" id="{{$desti->id}}">{{$desti->name}}</a></li>
        @endforeach
        </ul>
    </div>
</div>