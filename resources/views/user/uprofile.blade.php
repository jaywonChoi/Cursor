@extends('layouts.header')
@section('content')

<div class="container">
  <div class="">
    <h4>ようこそ{{ Auth::user()->uid }}様</h4>
    <p>いつもご利用ありがとうございます。</p>
  </div>
  <div class="">
    <a href="#"><h4>会員登録情報編集</h4></a>

  </div>
  <div class="">
    <h4>購入履歴</h4>
    <table>
      <tr>
        <td>注文日時</td>
        <td>注文番号</td>
        <td>商品名</td>
      </tr>
    </table>
    
  </div>
</div>





@stop
