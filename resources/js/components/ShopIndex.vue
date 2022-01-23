<template>
  <div>
    <div>
        <select class="searchSelect" name="searchArea" v-model="selectedArea">
          <option value="All area">All area</option>
          <option value="東京都">東京都</option>
          <option value="大阪府">大阪府</option>
          <option value="福岡県">福岡県</option>
        </select>
        <select class="searchSelect" name="searchGenre" v-model="selectedGenre">
          <option value="All genre">All genre</option>
          <option value="ラーメン">ラーメン</option>
          <option value="寿司">寿司</option>
          <option value="焼肉">焼肉</option>
          <option value="居酒屋">居酒屋</option>
          <option value="イタリアン">イタリアン</option>
        </select>
      </div>
      <div class="card-wrapper" id="card-wrapper">
        <section v-for="shop in shops" :key="shop.id" class="card">
            <img class="card-img" :src="shop.images[0].path" alt="#">
            <p>{{shop.name}}</p>
            <span>{{shop.area}}</span>
            <span>{{shop.genre}}</span>
            <a v-bind:href="'/detail/' + shop.id ">詳しく見る</a>
            <input type="hidden" name="shop_id" :value="shop.id">
            <img v-if="shop.favorites[0]" v-on:click="favorite(user.id,shop.id)" class="fav-btn" src="/images/heart_red.png">
            <img v-else @click.native="favorite" class="fav-btn" src="/images/heart_gray.png">
        </section>
    </div>
  </div>
</template>

<script>
  export default{
    props:{
      shops:{
        type:String,
      },
      user:{
        type:Object,
      },
    },
    data(){
      return{
        selectedArea:"All area",
        selectedGenre:"All genre",
      }
    },
    methods:{
      favorite(){
        console.log('a');
        // const sendData = {
        //   user_id:user_id,
        //   shop_id:shop_id,
        // };
        // axios.post('http://127.0.0.1:8000/', sendData);
      }
    }
}
</script>