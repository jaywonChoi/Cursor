<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

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
      return view('detail',compact('product'));
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
}
