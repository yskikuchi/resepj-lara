<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Spline+Sans:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/reset.css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script src="{{ asset('js/app.js') }}" defer="defer"></script>
  <title>Rese</title>
</head>
<body>
  <div>
    <div class="ttl-wrapper">
      @if(Auth::check())
      <x-modal class="ttl-menu"></x-modal>
      @else
      <x-modal-guest class="ttl-menu"></x-modal-guest>
      @endif
      <h1>
        <a class="ttl-name" href="/">Rese</a>
      </h1>
    </div>
  @yield('content')
  </div>
</body>
<style>
  body{
    background-color:whitesmoke;
    width:90%;
    margin:0 auto;
  }
  .ttl-wrapper{
  display:flex;
  margin:40px 0;
  }
  .ttl-wrapper h1{
    color:#4169e1;
    font-weight:bold;
    margin:0 20px;
  }

  .ttl-name{
    color:#4169e1;
    text-decoration:none;
    font-size:40px;
    font-weight:bold;
    font-family: 'Spline Sans', sans-serif;
  }
</style>
</html>