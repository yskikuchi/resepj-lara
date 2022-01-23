@extends('layouts.default')

@section('content')
<div id="app">
    <div class="register-wrapper">
        <p class="register-ttl">Registration</p>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="error" :errors="$errors" />

            <form class="register-form" method="POST" action="{{ route('register') }}">
                @csrf
                    <!-- Name -->
                <div>
                        <input type="text" name="name" placeholder="Username" required>
                </div>
                    <!-- Email Address -->
                <div>
                    <input type="email" name="email" placeholder="Email" required>

                </div>
                <div>
                    <input type="text" name="tel" placeholder="TEL">

                </div>
                    <!-- Password -->
                <div>
                    <input type="password" name="password" placeholder="Password" required>

                </div>

                <div>
                    <button class="register-btn">登録</button>
                </div>
                <p class="to-login"><a href="/login">会員の方はこちら</a></p>
            </div>
</div>
<script>
    const vm = new Vue({
    el:'#app',
    })
</script>

@endsection
<style>
    .register-ttl{
        background:royalblue;
        color:white;
        padding:15px 20px;
        font-size:20px;
    }
    .register-wrapper{
        margin:0 auto;
        width:30%;
        background:white;
        border-radius:10px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        overflow:hidden;
    }
    .register-form{
        width:70%;
        margin:20px auto;
    }
    .register-form input{
        width:100%;
        height:25px;
        border:none;
        border-bottom:1px solid black;
        margin-bottom:10px;
    }
    .register-form div:last-of-type{
        display:flex;
        justify-content:flex-end;
        margin-top:20px;
    }
    .register-btn{
        background-color:royalblue;
        color:white;
        border:none;
        border-radius:5px;
        padding:5px 10px;
    }
    .to-login{
        text-align:center;
    }
    .to-login a{
        color:royalblue;
    }
    .error{
        color:red;
        margin:10px;
    }
</style>
