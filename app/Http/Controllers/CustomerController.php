<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Cart;
use Auth;

class CustomerController extends Controller
{
    public function index(Cart $cart){
        $carts = $cart->getCarts();
        $totalqtt = $cart->getTotal();
        $totalprice = $cart->getTotal(true);
        return view('home.login',compact('totalqtt','carts','totalprice'));
    }
    public function login(Request $request){
        $rules = [
            'name' => 'required|min:4|max:50',
            'password' => 'required',
        ];
        $messages = [
            'name.required' => 'Ten khong duoc de trong',
            'name.min' => 'Ten it nhat 4 ki tu',
            'name.max' => 'Ten nhieu nhat 50 ki tu',
            'password.required' => 'Mat khau khong duoc de trong',
        ];
        $request -> validate($rules,$messages);
        $data = $request->only('name','password');
        $check_login = Auth::guard('cus')->attempt($data,$request->has('remember'));
        if($check_login){
                return redirect()->route('home');
        }
        return redirect()->back()->with('error','sai ten hoac mat khau');
        // dd($check_login);
    }
    public function logout(){
        Auth::guard('cus')->logout();
        return redirect()->route('home');
    }
    public function profile(){
        $auth = Auth::user();

    }
    public function signup(Cart $cart){
        $carts = $cart->getCarts();
        $totalqtt = $cart->getTotal();
        $totalprice = $cart->getTotal(true);
        return view('home.signup',compact('totalqtt','carts','totalprice'));
    }
    public function register(Request $request){
        $rules = [
            'name' => 'required|min:4|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'checkpassword' => 'required',
        ];
        $messages = [
            'name.required' => 'Ten khong duoc de trong',
            'name.min' => 'Ten it nhat 4 ki tu',
            'name.max' => 'Ten nhieu nhat 50 ki tu',
            'email.required' => 'Email khong duoc de trong',
            'email.email' => 'Email khong hop le',
            'email.unique' => 'Email da duoc su dung',
            'password.required' => 'Mat khau khong duoc de trong',
            'checkpassword.required' => 'Mat khau khong duoc de trong',
        ];
        $request -> validate($rules,$messages);
        // dd($request);
        if($request['password']==$request['checkpassword']){
            $data = $request->only('name','email');
            $data['password'] = bcrypt($request['password']);
            Customer::create($data);
            return redirect()->route('customer.login')->with('success','tao tai khoan thanh cong');
        }
        return redirect()->back()->with('error','mat khau khong trung khop');
        
    }
}
?>