
@extends('layouts.default')

@section('content')

<div id="app">
    <h2>@{{message}}</h2>
    <a href="/">一覧へ</a>
</div>
<script>
    const app = new Vue({
        el:'#app',
        data:{
            message:'dashboard'
        }
    });
</script>
@endsection