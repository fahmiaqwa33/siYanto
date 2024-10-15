@extends('layouts.layoutlogin') <!-- Jika Anda memiliki layout utama -->

@section('content')
<div class="wrapper">
    <div class="logo">
        <img src="/assets/img/logo_wsb.png" alt="">
    </div>
    <div class="text-center mt-4 name">
        Login
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="username" id="userName" placeholder="Username" required>
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password" required>
        </div>
        <button class="btn mt-3">Login</button>
    </form>    

    <!-- Error messages section -->
    @if($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="text-center fs-6">
        <a href="#">Forget password?</a> or <a href="#">Sign up</a>
    </div>
</div>
@endsection
