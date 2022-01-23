@extends('layouts.default')

@section('content')
<div id="app">
  <div class="detail-wrapper">
    <div class="shop-detail">
      <p class="shop-name">
        <span class="back-btn"><a href="/">&lt;</a></span>
        @{{shop.name}}
      </p>
      <img class="shop-detail_img" :src="image" alt="#">
      <div class="shop-tag">
        <span>&#035;@{{shop.area}}</span>
        <span>&#035;@{{shop.genre}}</span>
      </div>
      <p>@{{shop.detail}}</p>
    </div>
    <div class="booking-form">
      <form action="/booking" method="POST">
      @csrf
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
        <p class="booking-ttl">予約</p>
        <input type="hidden" name="shop_id" :value="shop.id">
        <input type="date" name="date" v-model="date" :min="fromDate" :max="untilDate" required>
        <select name="time" v-model="time" id="time"></select>
        <select name="number_of_people" v-model="number" id="number"></select>
        <table class="booking-table">
          <tr>
            <th>Shop</th>
            <td>{{$shop->name}}</td>
          </tr>
          <tr>
            <th>Date</th>
            <td>@{{date}}</td>
          </tr>
          <tr>
            <th>Time</th>
            <td>@{{time}}</td>
          </tr>
          <tr>
            <th>Number</th>
            <td>@{{number}}</td>
          </tr>
        </table>
        <button class="booking-btn">予約する</button>
      </form>
    </div>
  </div>
</div>
<script>
  const vm = new Vue({
    el:'#app',
    data:{
        shop: @json($shop),
        image:"",
        fromDate:"",
        untilDate:"",
        date:"",
        time:"11:00",
        number:"1人",
    },
    mounted:function(){
      this.image = this.shop.images[0].path;
      const today = new Date();
      const oneMonthLater = new Date();
      oneMonthLater.setMonth(oneMonthLater.getMonth()+1);
      this.fromDate = today.toISOString().slice(0,10);
      this.untilDate = oneMonthLater.toISOString().slice(0,10);
    }
  })
  const timeList = document.getElementById('time');
  const numberList = document.getElementById('number');
  //予約時間、人数の選択肢を表示
  for(let i = 11; i <= 21 ;i++){
    let option = '<option value="'+ i + ':00">' + i +':00</option> <option value="' + i + ':30">' + i + ':30</option>';
    timeList.insertAdjacentHTML('beforeend',option);
    }
  for(let i = 1; i <= 50 ;i++){
    let option = '<option value="' + i + '人">' + i + '人</option>';
    numberList.insertAdjacentHTML('beforeend',option);
  }

</script>
@endsection

<style>
  .detail-wrapper{
    display:flex;
    justify-content:space-around;
  }
  .shop-detail{
    width:40%;
  }
  .back-btn{
    display:inline-block;
    width:20px;
    background-color:white;
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.3);

  }
  .back-btn a{
    text-decoration:none;
  }
  .shop-name{
    font-size:25px;
    margin-bottom:20px;
  }
  .shop-detail_img{
    width:100%;
    height:auto;
  }
  .shop-tag{
    margin:10px 1px 20px 5px;
  }
  .booking-form{
    width:40%;
    background-color:royalblue;
    color:white;
    position:relative;
    padding:0 20px;
    border-radius:10px;
    overflow:hidden;
  }
  .booking-form input,select{
    display:block;
    height:30px;
    margin-bottom:10px;
  }
  .booking-form input{
    width:200px;
  }
  .booking-form select{
    width:80%;
  }
  .booking-ttl{
    font-size:25px;
    margin:20px 0;
  }
  .booking-table{
    color:white;
    background-color:#75A9FF;
    width:80%;
    margin:50px auto;
    padding:20px 0;
  }
  .booking-btn{
    width: 100%;
    height:50px;
    border:none;
    background-color:blue;
    color:white;
    position:absolute;
    bottom:0;
    left:0;
  }
</style>