@extends('layouts.cartheader')
@section('content')
<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
<div class="container" style="margin-top:5%">



    <div class="container" style="width:50%;float:right">
        <div class="w3-container">
          <ul class="w3-ul w3-card-4">
            @foreach(Cart::content() as $item)
            <li class="w3-bar">

              <img src="{{asset('/uploads/'.$item->model->main)}}" class="w3-bar-item w3-square" style="width:80px">
              <div class="w3-bar-item" style="width:37%">
                <span class="w3-large">{{$item->model->ptitle}}</span>
              </div>
              <div class="w3-bar-item" style="width:20%">
                <div>
                <span class="w3-large">{{ $item->qty }}冊</span>
              </div>
              </div>
              <div class="w3-bar-item">
                <span class="w3-large">￥{{$item->model->price}}</span>
              </div>
            </li>
              @endforeach
          </ul>
        </div>
        <div class="w3-container" style="background-color:#f2f2f2;border-radius:3px;margin:5%;text-align:right">
          <p>SubTotal: ￥{{ Cart::subtotal()}}</p>
          <p>Tax(8%):  ￥{{ Cart::tax()}}</p>
          <p>Total:    ￥{{ Cart::total() }}</p>
        </div>
    </div>

        <div class="container" style="width:50%">
          <div class="container">

          <form action="/action_page.php">

            <div class="row">
              <div class="col-50">
                <h3>Billing Address</h3>
                <label for="name"><i class="fa fa-user"></i>お名前</label><br>
                <input type="text" id="fname" name="firstname" placeholder="山田太郎"><br>
                <label for="email"><i class="fa fa-envelope"></i>Email</label><br>
                <input type="text" id="email" name="email" placeholder="john@example.com"><br>
                <label for="adr"><i class="fa fa-address-card-o"></i>郵便番号</label><br>
                <input type="text"  name="zip01"  maxlength="8" onkeyup="AjaxZip3.zip2addr(this,'','pref01','addr01');" placeholder="ハイフンも大丈夫です！"><br>
                <label for="city"><i class="fa fa-institution"></i>都道府県</label><br>
                <input type="text"  name="pref01"><br>
                <label for="city"><i class="fa fa-institution"></i>市区町村</label><br>
                <input type="text"  name="addr01"><br>
                <label for="city"><i class="fa fa-institution"></i>その他住所</label><br>
                <input type="text" id="city" name="city" placeholder="番地や建物名（部屋番号）"><br>
                <label for="city"><i class="fa fa-institution"></i>お電話番号</label><br>
                <input type="text" id="city" name="city" placeholder="03000000000"><br>


              <div class="col-50">
                <h3>Payment</h3>
                <label for="fname">Accepted Cards</label>
                <div class="icon-container">
                  <i class="fa fa-cc-visa" style="color:navy;"></i>
                  <i class="fa fa-cc-amex" style="color:blue;"></i>
                  <i class="fa fa-cc-mastercard" style="color:red;"></i>
                  <i class="fa fa-cc-discover" style="color:orange;"></i>
                </div>
                <label for="cname">Name on Card</label><br>
                <input type="text" id="cname" name="cardname" placeholder="Yamada Taro"><br>
                <label for="ccnum">Credit card number</label><br>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"><br>
                <label for="expmonth">Exp Month/ Year</label><br>
                <select class="" name="">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
                <!--year -->
                <input type="text" id="expyear" size="14" name="expyear" placeholder="2018"><br>
                <label for="cvv">CVV</label><br>
                <input type="text" id="cvv" name="cvv" placeholder="352"><br><br>

              </div>

            </div>

            <input type="submit" value="Continue to checkout" class="w3-button w3-black">
          </form>
        </div>
    </div>

</div>
@stop
