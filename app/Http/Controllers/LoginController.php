<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }
    public function login(Request $request){
        // $pass_hashed = bcrypt(123456);
        // dd($pass_hashed);
        $data = $request->only('name','password');
        $check_login = Auth::attempt($data);
        if($check_login){
            // $role = Auth::user('role');
            // dd($role);
            // $admin = "admin";
            // if($role = $admin){
                return redirect()->route('admin');
            // }
            // return redirect()->route('home');
        }
        return redirect()->back()->with('error','sai ten hoac mat khau');
        // dd($check_login);
    }
    public function logout(){
        Auth::logout();
        return redirect()->action([LoginController::class, 'index']);
    }
    public function profile(){
        $auth = Auth::user();

    }
    public function signup(){
        return view('login.signup');
    }
    public function register(Request $request){
        $rules = [
            'name' => 'required|min:4|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_check' => 'required',
        ];
        $messages = [
            'name.required' => 'Ten khong duoc de trong',
            'name.min' => 'Ten it nhat 4 ki tu',
            'name.max' => 'Ten nhieu nhat 50 ki tu',
            'email.required' => 'Email khong duoc de trong',
            'email.email' => 'Email khong hop le',
            'email.unique' => 'Email da duoc su dung',
            'password.required' => 'Mat khau khong duoc de trong',
            'password_check.required' => 'Mat khau khong duoc de trong',
        ];
        $request -> validate($rules,$messages);
        // dd($request);
        if($request['password']==$request['password_check']){
            $data = $request->only('name','email');
            $data['password'] = bcrypt($request['password']);
            User::create($data);
            return redirect()->route('login')->with('success','tao tai khoan thanh cong');
        }
        return redirect()->back()->with('error','mat khau khong trung khop');
        
    }
}
?>