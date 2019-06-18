@extends('layouts.header')
@section('content')
  <!--product images
  product details and images
  get cart buttons
-->
<div class="w3-row w3-container">
  <div class="w3-col s6">
    <div class="w3-display-container mySlides">
    <img src="/uploads/{{ $product->main }}" style="width:69%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Main Image</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="/uploads/{{ $product->sub1}}" style="width:69%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Sub1</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="/uploads/{{ $product->sub2 }}" style="width:69%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Sub2</p>
      </div>
    </div>
    <div class="w3-col">
      <div class="w3-section">
        <div class="w3-col s3">
          <img class="demo w3-opacity w3-hover-opacity-off" src="/uploads/{{ $product->main }}" style="width:80%;cursor:pointer" onclick="currentDiv(1)" title="Main">
        </div>
        <div class="w3-col s3">
          <img class="demo w3-opacity w3-hover-opacity-off" src="/uploads/{{ $product->sub1 }}" style="width:80%;cursor:pointer" onclick="currentDiv(2)" title="Sub1">
        </div>
        <div class="w3-col s3">
          <img class="demo w3-opacity w3-hover-opacity-off" src="/uploads/{{ $product->sub2 }}" style="width:80%;cursor:pointer" onclick="currentDiv(3)" title="Sub2">
        </div>
      </div>
    </div>
  </div>

  <div class="w3-col s6 ">
    <div class="w3-text-grey">
      <span>Category > {{$product->category}}</span>
      <h2>{{ $product->ptitle}}</h2>
      <h3>{{ $product->ptext}}</h3>
      <h2 class="w3-text" style="color:lightsalmon">￥{{$product->price}} (税込)</h2>
      <h4>在庫: {{ $product->quan}}</h4>
    </div>
    <div>
      <input type="number" min="1" value="1" style="width:70px"> 冊
      <a href="{{route('addCart',$product->pid)}}"><input type="button" name="cart" value="カートへ" class="w3-button w3-teal"style="width:50%"></a>
    </div>
    <div class="">
      <h1>review</h1>
    </div>

  </div>

</div>
<!-- detail -->
<div class="w3-container">
 <div class="">
   <h1>naiyo</h1>
   <img src="/uploads/{{ $product->sub1 }}" style="width:60%"> <br>
   <img src="/uploads/{{ $product->sub2 }}" style="width:60%"> <br>
 </div>
</div>

<!--also like-->
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
