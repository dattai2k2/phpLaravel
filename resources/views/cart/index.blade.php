@extends('layouts.main')
@section('content')
<section id="aa-catg-head-banner">
   <img src="{{ URL::asset('public/assets/img/fashion/1920x300-water-background.jpg') }}" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Cart Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Cart</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        @if($totalqtt==0)
        <div class="card-body cart">
                <div class="col-sm-12 empty-cart-cls text-center"> <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                    <h3><strong>Your Cart is Empty</strong></h3>
                    <h4>Add something to make me happy :)</h4> <a href="{{route('home')}}" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a>
                </div>
            </div>
        @endif
         <div class="cart-view-area">
           <div class="cart-view-table">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($carts as $cart)
                      <tr>
                        <td><a class="remove" href="{{route('cart.remove',$cart->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm này không?');"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="../public/images/{{ $cart->image }}" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">{{ $cart->name }}</a></td>
                        <td>{{ $cart->price }}VND</td>
                        <form action="{{route('cart.update',$cart->id)}}">
                            <td><input class="aa-cart-quantity" type="number" value="{{ $cart->quantity }}" name="quantity" min="1" max="100">
                            <button type="submit" class="btn btn-primary cart-btn-transform m-3" >Update</button></td>
                        </form>
                        <td>{{ $cart->price * $cart->quantity }}</td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                  <a href="{{route('cart.removeAll')}}" class="aa-cart-view-btn" onclick="return confirm('Bạn chắc chắn muốn xóa toàn bộ sản phẩm không?');">Clear all</a>
                </div>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Total Item</th>
                     <td>{{$totalqtt}}</td>
                   </tr>
                   <tr>
                     <th>Total</th>
                     <td>{{number_format($totalprice)}}</td>
                   </tr>
                 </tbody>
               </table>
               <a href="{{route('home')}}" class="aa-cart-view-btn">Continue shopping</a>
               <a href="{{route('order.checkout')}}" class="aa-cart-view-btn">Proced to Checkout</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <x-subscribe/>
@stop