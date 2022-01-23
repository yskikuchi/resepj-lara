
@extends('layouts.default')

@section('content')

<div class="thanks-wrapper">
  <p>会員登録ありがとうございます</p>
  <a href="/login">ログインする</a>
</div>
<style>
  .thanks-wrapper{
    width:40%;
    height:250px;
    margin:0 auto;
    text-align:center;
    background:white;
    border-radius:10px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
  }
  .thanks-wrapper p{
    font-size:25px;
    margin-bottom:20px;
  }
  .thanks-wrapper a{
    display:block;
    text-decoration:none;
    width:130px;
    background:royalblue;
    color:white;
    border-radius:10px;
    padding:5px 0 ;
  }
</style>
@endsection