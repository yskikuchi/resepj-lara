@extends('layouts.default')

@section('content')
<div class="detail-wrapper">
  <div class="shop-detail">
    <p class="shop-name">{{$shop->name}}</p>
    @foreach($shop->images as $image)
    <img class="shop-detail_img" src="{{$image->path}}" alt="#">
    @endforeach
    <span>{{$shop->area}}</span>
    <span>{{$shop->genre}}</span>
    <p>{{$shop->detail}}</p>
  </div>

  <div class="booking-form">
    <form action="/booking" method="POST">
    @csrf
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
      <p class="booking-ttl">予約</p>
      <input type="hidden" name="shop_id" value={{$shop->id}}>
      <input onInput="selectDate()" type="date" name="date" id="date" min="" max="" required>
      <select onInput="selectTime()" name="time" id="time"></select>
      <select onInput="selectNumber()" name="number_of_people" id="number"></select>
      <table class="booking-table">
        <tr>
          <th>Shop</th>
          <td>{{$shop->name}}</td>
        </tr>
        <tr>
          <th>Date</th>
          <td id="selected-date"></td>
        </tr>
        <tr>
          <th>Time</th>
          <td id="selected-time">11:00</td>
        </tr>
        <tr>
          <th>Number</th>
          <td id="selected-number">1人</td>
        </tr>
      </table>
      <button class="booking-btn">予約する</button>
    </form>
  </div>
</div>

<script>
  const timeList = document.getElementById('time');
  const numberList = document.getElementById('number');
  const date = document.getElementById('date');
  const time = document.getElementById('time');
  const number = document.getElementById('number');
  const selectedDate = document.getElementById('selected-date');
  const selectedTime = document.getElementById('selected-time');
  const selectedNumber = document.getElementById('selected-number');

  //予約時間、人数の選択肢を表示
  for(let i = 11; i <= 21 ;i++){
    let option = '<option value="'+ i + ':00">' + i +':00</option> <option value="' + i + ':30">' + i + ':30</option>';
    timeList.insertAdjacentHTML('beforeend',option);
    }
  for(let i = 1; i <= 100 ;i++){
    let option = '<option value="' + i + '人">' + i + '人</option>';
    numberList.insertAdjacentHTML('beforeend',option);
  }

  //選択された値を表示
  function selectDate(){
    selectedDate.innerHTML = date.value;
  }
  function selectTime(){
    selectedTime.innerHTML = time.value;
  }
  function selectNumber(){
    selectedNumber.innerHTML = number.value;
  }

  const today = new Date();
  date.setAttribute('min', today.toISOString().slice(0,10));

  const untilDate = new Date();
  untilDate.setMonth(untilDate.getMonth()+1);
  date.setAttribute('max', untilDate.toISOString().slice(0,10));

  console.log(date.min);
  console.log(date.max);

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
  .shop-name{
    font-size:25px;
  }
  .shop-detail_img{
    width:100%;
    height:auto;
  }
  .booking-form{
    width:40%;
    background-color:royalblue;
    color:white;
    position:relative;
    padding:0 20px;
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