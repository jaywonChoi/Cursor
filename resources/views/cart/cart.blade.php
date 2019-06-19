@extends('layouts.header')
@section('content')

  <div class="col-25">
    @if(session()->has('success_message'))
    <div class="w3-panel w3-green w3-round">
      {{ session()->get('success_message')}}
    </div>
    @endif
    @if(Cart::count()> 0)
    <div class="w3-panel w3-grey w3-round">
    <p>{{ Cart::count() }} products in Cart!</p>
  </div>
    @endif

    @if(Cart::count()=== 0)
      <div class="w3-container w3-center">
        <p>No Product in Cart!</p>
        <a style="text-decoration: none" href="{{route('shoppage')}}"><button class="w3-button w3-black" >Continue shopping!</button></a>
      </div>
    @endif


    <div class="container">
        <div class="w3-container">
          <ul class="w3-ul w3-card-4">
            @foreach(Cart::content() as $item)
            <li class="w3-bar">

              <form  action="{{route('cart.destory',$item->rowId)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE')}}
                <button type="submit" class="w3-bar-item w3-button w3-white w3-right w3-xlarge">x</button>
              </form>
              <a href="{{route('detail',$item->model->pid)}}"><img src="{{asset('/uploads/'.$item->model->main)}}" class="w3-bar-item w3-square" style="width:15%"></a>
              <div class="w3-bar-item">
                <span class="w3-large"><a href="{{route('detail',$item->model->pid)}}">{{$item->model->ptitle}}</a></span>
              </div>
              <div class="w3-bar-item">
                <span class="w3-large">
                    <select name="">
                    <option selected="">1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </span>

              </div>
              <div class="w3-bar-item">
                <span class="w3-large">￥{{$item->model->price}}</span>
              </div>
            </li>
              @endforeach
          </ul>
        </div>
        <div class="w3-container" style="background-color:#f2f2f2;border-radius:3px;margin:5%">
          <p>Tax(8%): ￥{{ Cart::tax()}}</p>
          <p>Total: ￥{{ Cart::total() }}</p>
        </div>
    </div>




  <div class="w3-row" style="background-color:#f2f2f2;border-radius:3px;margin:5%">
    <h4 style="margin:20px">Don't miss our other product!</h4>
    @foreach($like as $product)
    <div class="w3-col l3 s6" >
      <div class="w3-container w3-display-container">
        <img src="/uploads/{{ $product->main }}" style="width:167px;height:222px;">
        <p>{{$product->ptitle}}<br><b>￥{{$product->price}}</b></p>
      </div>
    </div>
    @endforeach
  </div>


@stop
