@extends('layouts.default')

@section('content')

    <div class="register-wrapper">
        <p class="register-ttl">Registration</p>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="register-form" method="POST" action="{{ route('register') }}">
            @csrf
                <!-- Name -->
            <div>
                <input type="text" name="name" placeholder="Username" required>
                    <!-- <x-label for="name" :value="__('Name')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus /> -->
            </div>
                <!-- Email Address -->
            <div>
                <input type="email" name="email" placeholder="Email" required>
                <!-- <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required /> -->
            </div>
            <div>
                <input type="text" name="tel" placeholder="TEL">
            </div>
                <!-- Password -->
            <div>
                <input type="password" name="password" placeholder="Password" required>
                    <!-- <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" /> -->
            </div>

            <div>
                <button class="register-btn">登録</button>
            </div>
            <p class="to-login"><a href="/login">会員の方はこちら</a></p>
        </div>

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
</style>
