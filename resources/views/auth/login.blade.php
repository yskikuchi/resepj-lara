@extends('layouts.default')

@section('content')

    <div class="login-wrapper">
        <p class="login-ttl">Login</p>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="error" :errors="$errors" />

        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <!-- Password -->
            <div>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div>
                <button class="login-btn">ログイン</button>
            </div>
            <p class="to-register"><a href="/register">会員登録はこちら</a></p>
        </form>
    </div>
@endsection

<style>
    .login-ttl{
        background:royalblue;
        color:white;
        padding:15px 20px;
        font-size:20px;
    }
    .login-wrapper{
        margin:0 auto;
        width:35%;
        background:white;
        border-radius:10px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        overflow:hidden;
    }
    .login-form{
        width:70%;
        margin:20px auto;
    }
    .login-form input{
        width:100%;
        height:25px;
        border:none;
        border-bottom:1px solid black;
        margin-bottom:10px;
    }
    .login-form div:last-of-type{
        display:flex;
        justify-content:flex-end;
        margin-top:10px;
    }
    .login-btn{
        background-color:royalblue;
        color:white;
        border:none;
        border-radius:5px;
        padding:5px 10px;
    }
    .to-register{
        text-align:center;
    }
    .to-register a{
        color:royalblue;
    }
    .error{
        color:red;
        margin:10px;
    }
</style>