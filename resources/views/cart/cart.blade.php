@extends('layouts.header')
@section('content')

  <div class="col-25">
    <div class="container">

    </div>

  </div>

  <div class="w3-row" style="background-color:#f2f2f2;border-radius:3px;margin:5%">
    <h4>Don't miss our other product!</h4>
    @foreach($like as $product)
    <div class="w3-col l3 s6" >
      <div class="w3-container w3-display-container">
        <img src="/uploads/{{ $product->main }}" style="width:100%">
        <p>{{$product->ptitle}}<br><b>￥{{$product->price}}</b></p>
      </div>
    </div>
    @endforeach
  </div>


@stop
