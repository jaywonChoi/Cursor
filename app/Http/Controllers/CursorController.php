<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Session;
use App\Cart;

class CursorController extends Controller
{
    //
    public function index()
    {
      //
      $products = Product::orderBy('created_at','desc');
      $products = Product::all();
      return view('Cursor',compact('products'));
    }

    public function show($pid)
    {
      //detail product show
      $product = Product::findOrFail($pid);
      $like = Product::where('pid','!=',$pid)->alsolike()->get();
      return view('detail',compact('product'))->with('like',$like);
    }

    //shoppage
    public function shop()
    {
      // code...
      //
      $products = Product::orderBy('created_at','desc');
      $products = Product::all();
      return view('shop',compact('products'));
    }

    //open shopping Cart
    public function GoCart()
    {
      if (!Session::has('cart')) {
        return view('GOcart');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      return view('GOcart',['products'=>$cart->products,'totalPrice'=>$cart->totalPrice]);
    }

    //addCart
    public function getAddCart(Request $request,$pid)
    {
      $product = Product::find($pid);
      $oldCart = Session::has('cart')? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->add($product,$product->pid);

      $request->session()->put('cart',$cart);
      //dd($request->session()->get('cart'));
      return redirect()->route('GOcart');
    }



}
