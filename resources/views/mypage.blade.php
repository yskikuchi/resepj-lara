@extends('layouts.default')

@section('content')
<p class="user-name">{{$user->name}}さん</p>
<div id="app">
  <div class="mypage_wrapper">
    <div class="booking-list">
      <h2>予約状況</h2>
      <section v-for="(booking, index) in bookings" :key="booking.id" class="booking_card">
        <span>予約@{{index+1}}</span>
        <img @click="cancelBooking(booking.id)" class="close-btn" src="/images/close.png">
          <table>
            <tr>
              <th>Shop</th>
              <td>@{{booking.shop.name}}</td>
            </tr>
            <tr>
              <th>Date</th>
              <td>@{{booking.date}}</td>
            </tr>
            <tr>
              <th>Time</th>
              <td>@{{booking.time|formatTime}}</td>
            </tr>
            <tr>
              <th>Number</th>
              <td>@{{booking.number_of_people}}人</td>
            </tr>
          </table>
      </section>
    </div>
    <div class="favorite-shops">
      <h2>お気に入り店舗</h2>
      <div class="favorite-shop_cards">
        <section v-for="favorite in favorites" class="card">
          <img class="card-img" :src="favorite.shop.images[0].path" alt="#">
          <div class="card-content">
              <p class="card-name">@{{favorite.shop.name}}</p>
              <span class="area">&#035;@{{favorite.shop.area}}</span>
              <span class="genre">&#035;@{{favorite.shop.genre}}</span>
              <div>
                <a class="card-detail" :href="'/detail/' + favorite.shop.id">詳しく見る</a>
                <img @click="unfavorite(favorite.id)" class="fav-btn" src="/images/heart_red.png">
              </div>
            </div>
        </section>
      </div>
    </div>
  </div>
</div>
<script>
  const vm = new Vue({
    el:'#app',
    data:{
        bookings: @json($bookings),
        favorites: @json($favorites),
    },
    filters:{
      formatTime(time){
        return time.slice(0, -3);
      }
    },
    methods:{
      unfavorite(e){
        const favorite_id = e;
        axios.delete("http://127.0.0.1:8000/favorite/" + favorite_id);
        location.reload();
      },
      cancelBooking(id){
        console.log(id);
        const booking_id = id;
        axios.delete("http://127.0.0.1:8000/booking/" + booking_id);
        location.reload();
      }
    }
  })
</script>
@endsection

<style>
  .mypage_wrapper{
    display:flex;
    margin:0 auto;
    justify-content:center;
    margin-top:30px;
  }
  .user-name{
    font-size:30px;
    font-weight:bold;
    text-align:center;
    position:absolute;
    top:5%;
    left:50%;
  }
  .booking-list{
    width:50%;
    margin:0 auto;
  }
  .booking-list h2, .favorite-shops h2{
    font-size:25px;
    margin-bottom:20px;
  }
  .booking_card{
    width:60%;
    color:white;
    border-radius:5px;
    background-color:royalblue;
    padding:5px 10px;
    margin-bottom:20px;
    position:relative;
  }
  .booking_card span{
    font-size:20px;
    line-height:1.5em;
  }
  .booking_card table{
    color:white;
    font-size:20px;
    padding:10px;
  }
  .booking_card th{
    text-align:left;
    padding-right:20px;
  }

  .favorite-shop_cards{
    display:flex;
    flex-wrap:wrap;
    position:relative;
  }
  .card{
    border-radius:5px;
    overflow:hidden;
    background-color:white;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
    margin:10px 5px;
    width:45%;
    position:relative;
  }
  .card-content{
    padding:10px 20px;
  }
  .favorite-shops{
    width:50%;
  }
  .card-img{
    max-width:100%;
    height:auto;
  }
  .card-name{
    font-weight:bold;
    font-size:18px;
    margin: 10px 0;
  }
  .card-content span{
    font-size:15px;
  }
  .card-detail{
    display:inline-block;
    width:100px;
    font-size:15px;
    padding:7px 5px;
    margin-top:20px;
    text-align:center;
    text-decoration:none;
    background:royalblue;
    color:white;
    border-radius:5px;
  }
  .fav-btn{
    width:35px;
    display:inline-block;
    position:absolute;
    bottom:5;
    right:5;
  }
  .close-btn{
    height:23px;
    position:absolute;
    top:10%;
    right:5%;
  }
</style>