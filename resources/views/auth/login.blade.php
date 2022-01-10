@extends('layouts.default')

@section('content')

    <div class="login-wrapper">
        <p class="login-ttl">Login</p>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <input type="email" name="email" placeholder="Email" required>
                <!-- <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus /> -->
            </div>

            <!-- Password -->
            <div>
                <input type="password" name="password" placeholder="Password" required>
                <!-- <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" /> -->
            </div>

            <!-- Remember Me -->
            <!-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif -->
            <div>
                <button class="login-btn">ログイン</button>
                <!-- <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button> -->
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
        width:30%;
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
</style>