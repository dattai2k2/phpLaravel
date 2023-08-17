<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Auth;

class CartController extends Controller
{
    public function view(Cart $cart){
        $carts = $cart->getCarts();
        $totalqtt = $cart->getTotal();
        $totalprice = $cart->getTotal(true);
        return view('cart.index',compact('carts','totalqtt','totalprice'));
    }
    public function update($id, Cart $cart,Request $request){
        $quantity = ($request->quantity && $request->quantity) > 0 ? floor($request->quantity) : 1;
        $cart->capnhat($id,$quantity);
        return redirect()->route('cart.view')->with('ok','cap nhat gio hang thanh cong');
    }
    public function add(Product $product, Cart $cart){
        $cart->add($product);
        return redirect()->back()->with('ok','them thanh cong');
    }
    public function remove($id, Cart $cart){
        $cart->remove($id);
        return redirect()->back()->with('ok','xoa thanh cong');
    }
    public function removeAll(Cart $cart){
        $cart->removeAll();
        return redirect()->route('cart.view')->with('ok','xoa thanh cong');
    }
    public function checkout(Cart $cart){
        $account = Auth::guard('cus')->user();
        $carts = $cart->getCarts();
        $totalqtt = $cart->getTotal();
        $totalprice = $cart->getTotal(true);
        $tax = $totalprice * 0.05;
        if($totalqtt==0){
            return view('cart-empty')->with('error','Giỏ hàng của bạn đang trống');
        }
        return view('cart.checkout',compact('carts','totalqtt','totalprice','tax','account'));
    }
    public function placeorder(Request $request,Cart $cart){
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ];
        $messages = [
            'name.required' => 'Ten khong duoc de trong',
            'email.required' => 'Email khong duoc de trong',
            'phone.required' => 'So dien thoai khong duoc de trong',
            'address.required' => 'Dia chi khong duoc de trong',
        ];
        $request -> validate($rules,$messages);
        $data = $request->only('name','email','phone','address','ordernote');
        $data['cus_id'] = Auth::guard('cus')->user()->id;
        if($order = Order::create($data)){
            $carts = $cart->getCarts();
            foreach($carts as $item){
                OrderDetail::create([
                    'order_id'=>$order->id,
                    'pro_id'=>$item->id,
                    'price'=>$item->price,
                    'quantity'=>$item->quantity
                ]);
            }
            $cart->removeAll();
            return redirect()->route('order.success');
        }
        return redirect()->back()->with('error','dat hang khong thanh cong');
    }
    public function success(){
        return redirect()->route('home');
    }
    public function history(Cart $cart){
        $carts = $cart->getCarts();
        $totalqtt = $cart->getTotal();
        $totalprice = $cart->getTotal(true);
        $account_id = Auth::guard('cus')->user()->id;
        $orders = Order::where('cus_id',$account_id)->paginate(5);
        return view('order_history',compact('orders','carts','totalqtt','totalprice'));
    }
    public function detail(Order $order,Cart $cart){
        $carts = $cart->getCarts();
        $totalqtt = $cart->getTotal();
        $totalprice = $cart->getTotal(true);
        return view('order_detail',compact('order','carts','totalqtt','totalprice'));
    }
}
