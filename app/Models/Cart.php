<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model{
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function add($product,$quantity=1){
        $carts = $this->getCarts();

        if(isset($carts[$product->id])){
            $carts[$product->id] -> quantity += $quantity;
        }else{
            $item = [
                'id' => $product->id,
                'name' => $product->pro_name,
                'image' => $product->image,
                'price' => $product->saleprice ? $product->saleprice : $product->price,
                'quantity' => $quantity
            ];
            $carts[$product->id] = (object)$item;
        }
        session(['cart'=>$carts]);
    }
    public function capnhat($id,$quantity=1){
        $carts = $this->getCarts();

        if(isset($carts[$id])){
            $carts[$id]->quantity = $quantity;
            session(['cart'=>$carts]);
        }
    }
    public function remove($id){
        $carts = $this->getCarts();

        if(isset($carts[$id])){
            unset($carts[$id]);
            session(['cart'=>$carts]);
        }
    }
    public function removeAll(){
        session()->forget('cart');
    }
    public function getCarts(){
        $carts = session('cart') ? session('cart') : [];
        return $carts;
    }
    public function getTotal($isPrice = false){
        $total=0;
        $carts = $this->getCarts();
        foreach($carts as $cart){
            if($isPrice){
                $total += $cart->quantity*$cart->price;
            }else{
                $total += $cart->quantity;
            }
        }
        return $total;
    }
}
?>