@extends('login.index')
@section('content')
<div class="col-md-6 col-lg-4">
    <div class="login-wrap p-0">
        <h3 class="mb-4 text-center">SIGNUP</h3>
        @if(Session::has('error'))
        <div>
            <button type="button" class="close" data-dismiss="alert"></button>
            {{Session::get('error')}}
        </div>
        @endif
        <form action="#" class="signin-form" method="post">
        @csrf
        <div class="form-group">
            <input type="text"name="name" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input name="password" id="password1" type="password" class="form-control" placeholder="Password" required>
            <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password" id="togg-pass-sign"></span>
        </div>
        <div class="form-group">
            <input name="password_check"  id="password2" type="password" class="form-control" placeholder="Retype Password" required>
            <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password" id="togg-pass-resign"></span>
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary submit px-3" name="signup">Sign Up</button>
        </div>
        </form>
    <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
    <div class="social d-flex text-center">
        <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
    </div>
    <a href="index.php" class="px-2 py-2 ml-md-1 rounded">Return To Home Page</a>
</div>
@stop