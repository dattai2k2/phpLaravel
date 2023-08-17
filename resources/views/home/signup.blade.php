@extends('layouts.main')
@section('content')
<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="{{ URL::asset('public/assets/img/fashion/1920x300-water-background.jpg') }}" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Register</h4>
                 <form action="" class="aa-login-form" method="post">
                     @csrf
                     @error('name') <small>{{$message}}</small> @enderror
                    <label for="">Username<span>*</span></label>
                    <input type="text" placeholder="Username" name="name">
                    
                    @error('email') <small>{{$message}}</small> @enderror
                    <label for="">Email Address<span>*</span></label>
                    <input type="text" placeholder="Email" name="email">
                    
                    @error('password') <small>{{$message}}</small> @enderror
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="password">
                    
                    
                    <label for="">Re-type Password<span>*</span></label>
                    <input type="password" placeholder="Re-type Password" name="checkpassword">
                    <label for="">Phone</label>
                    <input type="text" placeholder="Phone" name="phone">
                    <label for="">Address</label>
                    <input type="text" placeholder="Address" name="address">
                    <button type="submit" class="aa-browse-btn" name="register">Register</button>                    
                  </form>
                </div>
                  <a href="{{route('customer.login')}}" class="aa-cart-view-btn">Login</a>     
              </div>
              </div>     
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
 @stop