<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Cart::content());
      $like = Product::alsolike()->get();
        return view('/cart/cart')->with('like',$like);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //duplicate product
      /*
        $copy = Cart::search(function($cartItem, $rowId) use ($request){
          return $cartItem->id === $request->id;
        });

        if ($copy->isNotEmpty()) {
          return redirect()->route('cart.index')->with('success_message','already in your cart!');
        }
        */


        Cart::add($request->pid,$request->ptitle,$qty=1,$request->price)->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message','Product added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

          //dd(Cart::content());
          $qty = $request->newQty;
          $rowId=$request->rowID;
          //Update
          Cart::update($rowId,$qty);

        return redirect()->back()->with('success_message', 'Product qty changed');
        //  Cart::update($id,$request->qty);
        //  return redirect()->back()->with('success_message', 'Product qty changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Cart::remove($id);
        return back()->with('success_message','Product has been removed!');
    }
}
