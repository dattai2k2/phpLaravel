@extends('layouts.main')
@section('content')
<section id="aa-catg-head-banner">
    <img src="{{ URL::asset('public/assets/img/fashion/1920x300-water-background.jpg') }}" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>Checkout Page</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Checkout</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<!-- Cart view section -->
<section id="checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="checkout-area">
                    <!-- <form action=""> -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="checkout-left">
                                    <div class="panel-group" id="accordion">
                                        <!-- Coupon section -->
                                        <div class="panel panel-default aa-checkout-coupon">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseOne">
                                                        Have a Coupon?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <input type="text" placeholder="Coupon Code" class="aa-coupon-code">
                                                    <input type="submit" value="Apply Coupon" class="aa-browse-btn">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Billing Details -->
                                        <div class="panel panel-default aa-checkout-billaddress">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseThree">
                                                        Billing Details
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="First Name*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="Last Name*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="Company name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="email" placeholder="Email Address*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="tel" placeholder="Phone*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <textarea cols="8" rows="3">Address*</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <select>
                                                                    <option value="0">Select Your Country</option>
                                                                    <option value="1">Australia</option>
                                                                    <option value="2">Afganistan</option>
                                                                    <option value="3">Bangladesh</option>
                                                                    <option value="4">Belgium</option>
                                                                    <option value="5">Brazil</option>
                                                                    <option value="6">Canada</option>
                                                                    <option value="7">China</option>
                                                                    <option value="8">Denmark</option>
                                                                    <option value="9">Egypt</option>
                                                                    <option value="10">India</option>
                                                                    <option value="11">Iran</option>
                                                                    <option value="12">Israel</option>
                                                                    <option value="13">Mexico</option>
                                                                    <option value="14">UAE</option>
                                                                    <option value="15">UK</option>
                                                                    <option value="16">USA</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="Appartment, Suite etc.">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="City / Town*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="District*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="Postcode / ZIP*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Shipping Address -->
                                        <div class="panel panel-default aa-checkout-billaddress">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseFour">
                                                        Shippping Address
                                                    </a>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input"
                                                                name="accinfo" id="accinfo" value="checkedValue">
                                                            Get Account information
                                                        </label>
                                                    </div>
                                                </h4>
                                            </div>
                                            <form action="{{route('order.placeorder')}}" method="POST">
                                              @csrf
                                                <div id="collapseFour" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="text" placeholder="name" name="name">
                                                                    <input type="hidden" name="accname"
                                                                        value="{{$account->name}}">
                                                                    @error('name') <small>{{$message}}</small> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="email" placeholder="Email Address*"
                                                                        name="email">
                                                                    <input type="hidden" name="accemail"
                                                                        value="{{$account->email}}">
                                                                    @error('email') <small>{{$message}}</small> @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="aa-checkout-single-bill">
                                                                    <input type="tel" placeholder="Phone*" name="phone">
                                                                    <input type="hidden" name="accphone"
                                                                        value="{{$account->phone}}">
                                                                    @error('phone') <small>{{$message}}</small> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <textarea cols="8" rows="3"
                                                                        name="address" placeholder="Address*"></textarea>
                                                                    <input type="hidden" id="custId" name="accaddress"
                                                                        value="{{$account->address}}">
                                                                    @error('address') <small>{{$message}}</small> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="aa-checkout-single-bill">
                                                                    <textarea cols="8" rows="3" name="order_note" placeholder="Oder note " ></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="aa-browse-btn">Place Order</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="checkout-right">
                                    <h4>Order Summary</h4>
                                    <div class="aa-order-summary-area">
                                        <table class="table table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($carts as $cart)
                                                <tr>
                                                    <td>{{ $cart->name }} <strong> x {{ $cart->quantity }}</strong></td>
                                                    <td>{{ number_format($cart->price * $cart->quantity) }} VND</td>
                                                </tr>
                                                @endforeach
                                            <tfoot>
                                                <tr>
                                                    <th>Subtotal</th>
                                                    <td>{{number_format($totalprice)}} VND</td>
                                                </tr>
                                                <tr>
                                                    <th>Tax</th>
                                                    <td>{{number_format($tax)}} VND</td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>
                                                    <td>{{number_format($totalprice + $tax)}} VND</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <h4>Payment Method</h4>
                                    <div class="aa-payment-method">
                                        <label for="cashdelivery"><input type="radio" id="cashdelivery"
                                                name="optionsRadios"> Cash on Delivery </label>
                                        <label for="paypal"><input type="radio" id="paypal" name="optionsRadios"
                                                checked> Via Paypal </label>
                                        <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"
                                            border="0" alt="PayPal Acceptance Mark">
                                        <!-- <a href="{{route('order.placeorder')}}" class="aa-cart-view-btn">Place Order</a>                 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('js')
<script>
$('#accinfo').click(function() {
    var isCheck = $(this).is(':checked');
    if (isCheck) {
        var account_name = $('input[name="accname"]').val();
        var account_email = $('input[name="accemail"]').val();
        var account_phone = $('input[name="accphone"]').val();
        var account_address = $('input[name="accaddress"]').val();
        $('input[name="name"]').val(account_name);
        $('input[name="email"]').val(account_email);
        $('input[name="phone"]').val(account_phone);
        $('input[name="address"]').val(account_address);
    }
})
</script>
@stop