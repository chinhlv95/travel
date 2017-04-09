<div class="destination">
  @for( $i=0; $i<count($dataCategories); $i++ )
  <div class=" col-sm-6">
      <div class="foot-header">
        {{ $dataCategories[$i]['name'] }}
      </div>
      <div class="foot-links">
        @for( $j=0; $j<count($dataDestination); $j++ )
          @if( $dataDestination[$j]['cate_id'] == $dataCategories[$i]['id'] )
          <a href="{{URL::to('/')}}/destination/{{$dataDestination[$j]['id']}}">{{$dataDestination[$j]['name']}}</a>
          @endif
        @endfor
      </div>
  </div><!--/ col-sm-6-->
  @endfor
</div>