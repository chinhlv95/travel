@extends('frontend.layouts.masterpage')
@section('title', 'Trang chủ')
@section('content')

<section class="check-code">
<div class="container">
	@if(empty($dataCodeOrder))
      {{"Mã code chưa tồn tại"}}
	@endif
</div>
</section>
@endsection