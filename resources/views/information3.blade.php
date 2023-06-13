@extends('Layout.app_home')

@section('css')
<link rel="stylesheet" href="css/information.css">
@endsection

@section('content')
<div class="infoBase info3">
  @foreach (range(0, 7) as $item)
  <div class="item">
    <div class="itemImage">
      <img class="imgFull" src="images/inap.jpeg" alt="">
    </div>
    <span>Info</span>
  </div>
  @endforeach
</div>
@endsection