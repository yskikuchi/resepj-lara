@extends('layouts.default')

@section('content')
<div class="verify-wrapper">
    @if(session('status') == 'verification-link-sent')
    <p>確認メールを送信しました</p>
    @endif
    <p>メールをご確認ください。</p>
    <p>もし確認用メールが送信されていない場合は、下記をクリックしてください。</p>
            <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
            @csrf
                <button type="submit">{{ __('確認メールを再送信する') }}</button>
            </form>
</div>
<style>
.verify-wrapper{
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
.verify-wrapper p:first-child{
    margin:20px;
}
.verify-wrapper p{
    font-size:18px;
}
.verify-wrapper button{
    display:block;
    text-decoration:none;
    width:180px;
    background:royalblue;
    color:white;
    border-radius:10px;
    padding:5px 0;
    border:none;
    margin-top:10px;
    cursor:pointer;
  }
</style>
@endsection

