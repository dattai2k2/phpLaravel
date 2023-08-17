<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Cart;

class nav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $cart = new Cart();
        $carts = $cart->getCarts();
        $totalqtt = $cart->getTotal();
        $totalprice = $cart->getTotal(true);
        return view('components.nav',compact('carts','totalqtt','totalprice'));
    }
}
