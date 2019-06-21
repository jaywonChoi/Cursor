<?php

namespace App;

class Cart
{
  /*
    //just class
    public $products = null; //same product`s group
    public $totalQty = 0; // total quantity
    public $totalPrice = 0;


    public function __construct($oldCart)
    {
      if ($oldCart) {
        $this->products = $oldCart->products;
        $this->totalQty = $oldCart->totalQty;
        $this->totalPrice = $oldCart->totalPrice;
      }
    }
    public function add($product,$pid)
    {
      $storedItem = ['quan'=>0,'price'=>$product->price, 'product'=>$product];
      if ($this->products) {
        if (array_key_exists($pid,$this->products)) {
          $storedItem= $this->products[$pid];
        }
      }
      $storedItem['quan']++;
      $storedItem['price'] = $product->price * $storedItem['quan'];
      $this->products[$pid] = $storedItem;
      $this->totalQty++;
      $this->totalPrice+=$product->price;
    }
    */
}
