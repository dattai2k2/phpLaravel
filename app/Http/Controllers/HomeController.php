<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(Cart $cart){
        //echo "Hello World";
        $carts = $cart->getCarts();
        $datacat = new Category;
        $categorys = $datacat -> getselectcat();
        $datasize = new Size;
        $sizes = $datasize -> getselectsize();
        $databrand = new Brand;
        $brands = $databrand -> getselectbrand();
        $data = Product::search()->paginate(20);
        $totalqtt = $cart->getTotal();
        $totalprice = $cart->getTotal(true);
        
        return view('home.index', compact('data','categorys','sizes','brands','totalqtt','carts','totalprice'));
    }

    function about(){
        // echo "About";
        return view('home.about');
    }

    function product(Cart $cart)
    {
        $carts = $cart->getCarts();
        $datacat = new Category;
        $categorys = $datacat -> getselectcat();
        $datasize = new Size;
        $sizes = $datasize -> getselectsize();
        $databrand = new Brand;
        $brands = $databrand -> getselectbrand();
        $data = Product::search()->paginate(10);
        $totalqtt = $cart->getTotal();
        $totalprice = $cart->getTotal(true);
        return view('home.product', compact('data','categorys','sizes','brands','totalqtt','carts','totalprice'));
    }
    function productdetail($id,Cart $cart){
        $carts = $cart->getCarts();
        $datacat = new Category;
        $categorys = $datacat -> getselectcat();
        $datasize = new Size;
        $sizes = $datasize -> getselectsize();
        $databrand = new Brand;
        $brands = $databrand -> getselectbrand();
        $product = Product::findOrFail($id);
        $data = Product::search()->paginate(10);
        $dataproimg = Productimage::all()-> where('pro_id','=',$id);
        $productimgs = $dataproimg ;
        $totalqtt = $cart->getTotal();
        $totalprice = $cart->getTotal(true);
        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('home.productdetail', compact('data','product','categorys','sizes','brands','productimgs','totalqtt','carts','totalprice'));
    }

}
