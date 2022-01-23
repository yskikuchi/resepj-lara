
@extends('layouts.default')

@section('content')

<div class="done-wrapper">
  <p>ご予約ありがとうございます</p>
  <a href="/">戻る</a>
</div>

@endsection
<style>
  .done-wrapper{
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
  .done-wrapper p{
    font-size:25px;
    margin-bottom:20px;
  }
  .done-wrapper a{
    display:block;
    text-decoration:none;
    width:130px;
    background:royalblue;
    color:white;
    border-radius:10px;
    padding:5px 0 ;
  }
</style>