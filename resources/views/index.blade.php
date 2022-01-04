@extends('layouts.default')

@section('content')
  <div id="app">
    <!-- <p>@{{selectedList}}</p> -->
    <div>
        <select @change="changeArea" class="searchSelect" name="searchArea" v-model="selectedArea">
          <option value="All area">All area</option>
          <option value="東京都">東京都</option>
          <option value="大阪府">大阪府</option>
          <option value="福岡県">福岡県</option>
        </select>
        <select @change="changeGenre" class="searchSelect" name="searchGenre" v-model="selectedGenre">
          <option value="All genre">All genre</option>
          <option value="ラーメン">ラーメン</option>
          <option value="寿司">寿司</option>
          <option value="焼肉">焼肉</option>
          <option value="居酒屋">居酒屋</option>
          <option value="イタリアン">イタリアン</option>
        </select>
      </div>
      <div class="card-wrapper" id="card-wrapper">
        <section v-for="shop in shops" v-show="selectedList.includes(shop.name)" class="card">
            <img class="card-img" :src="shop.images[0].path" alt="#">
            <div class="card-content">
              <p class="card-name" >@{{shop.name}}</p>
              <span>&#035;@{{shop.area}}</span>
              <span>&#035;@{{shop.genre}}</span>
              <div>
                <a class="card-detail" :href="'/detail/' + shop.id ">詳しく見る</a>
                <input type="hidden" name="shop_id" :value="shop.id">
                @if(Auth::check())
                  <img v-if="shop.favorites[0]" @click="unfavorite(shop.favorites[0])" class="fav-btn" src="/images/heart_red.png">
                  <img v-else @click="favorite(user.id, shop.id)" class="fav-btn" src="/images/heart_gray.png">
                @else
                <a href="/login"><img @click="favorite(user.id, shop.id)" class="fav-btn" src="/images/heart_gray.png"></a>
                @endif
              </div>
            </div>
        </section>
    </div>
  </div>
<script>
  const vm = new Vue({
    el:'#app',
    data:{
        shops: @json($shops),
        user: @json($user),
        selectedArea:"All area",
        selectedGenre:"All genre",
        selectedList:[],
    },
    mounted:function(){
      for(let i = 0; i < this.shops.length; i++){
        this.selectedList.push(this.shops[i].name);
      }
    },
    methods:{
      async favorite(user_id, shop_id){
        const sendData = {
          user_id:user_id,
          shop_id:shop_id,
        };
        await axios.post("http://127.0.0.1:8000/favorite", sendData);
        location.reload();
      },
      unfavorite(e){
        const favorite_id = e.id;
        axios.delete("http://127.0.0.1:8000/favorite/" + favorite_id);
        location.reload();
      },
      changeArea(){
        for(let i = 0; i < this.shops.length; i++){
          const shopName = this.shops[i].name;
          const shopArea = this.shops[i].area;
          const shopGenre = this.shops[i].genre;
          if(this.selectedArea == "All area"){
            if(this.selectedGenre == "All genre"){
                if(!this.selectedList.includes(shopName)){
                  this.selectedList.push(shopName);
                }
              }else{
                if(shopGenre == this.selectedGenre){
                  if(!this.selectedList.includes(shopName)){
                  this.selectedList.push(shopName);
                  }
                }
              }
          }else{
            if(this.selectedGenre == "All genre"){
              if(shopArea == this.selectedArea){
                if(!this.selectedList.includes(shopName)){
                this.selectedList.push(shopName);
                }
              }else{
                this.selectedList = this.selectedList.filter(function(e){
                  return ! shopName.includes(e);
                });
                }
            }else{
              if(shopGenre == this.selectedGenre && shopArea == this.selectedArea){
                if(!this.selectedList.includes(shopName)){
                  this.selectedList.push(shopName);
                }
              }else{
                this.selectedList = this.selectedList.filter(function(e){
                  return ! shopName.includes(e);
                })
              }
              }
          }
          }
      },
      changeGenre(){
        for(let i = 0; i < this.shops.length; i++){
          const shopName = this.shops[i].name;
          const shopArea = this.shops[i].area;
          const shopGenre = this.shops[i].genre;
          if(this.selectedGenre == "All genre"){
            if(this.selectedArea == "All area"){
                if(!this.selectedList.includes(shopName)){
                  this.selectedList.push(shopName);
                }
              }else{
                if(shopArea == this.selectedArea){
                  if(!this.selectedList.includes(shopName)){
                  this.selectedList.push(shopName);
                  }
                }
              }
          }else{
            if(this.selectedArea == "All area"){
              if(shopGenre == this.selectedGenre){
                if(!this.selectedList.includes(shopName)){
                this.selectedList.push(shopName);
                }
              }else{
                this.selectedList = this.selectedList.filter(function(e){
                  return ! shopName.includes(e);
                });
                }
            }else{
              if(shopGenre == this.selectedGenre && shopArea == this.selectedArea){
                if(!this.selectedList.includes(shopName)){
                  this.selectedList.push(shopName);
                }
              }else{
                this.selectedList = this.selectedList.filter(function(e){
                  return ! shopName.includes(e);
                })
              }
              }
          }
        }}
    }
  })
</script>
@endsection

<style>
  .searchSelect{
    height:30px;
    border:none;
    background-color:white;
    box-shadow: 0px 5px 3px rgba(0, 0, 0, 0.3);
  }
  .card-wrapper{
    display:flex;
    flex-wrap:wrap;
  }
  .card{
    border-radius:5px;
    overflow:hidden;
    background-color:white;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
    margin:10px;
    width:22%;
    position:relative;
  }
  .card-content{
    padding:10px 20px;
  }
  .card-img{
    max-width:100%;
    height:auto;
  }
  .card-name{
    font-weight:bold;
    font-size:18px;
    margin: 5px 0;
  }
  .card-content span{
    font-size:15px;
  }
  .card-detail{
    display:inline-block;
    width:100px;
    font-size:15px;
    padding:3px 5px;
    margin-top:10px;
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
</style>