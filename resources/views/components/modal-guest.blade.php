<div id="modal">
  <div @click="toggleIsShowModal" class="menu" id="menu">
    <span class="menu__line--top"></span>
    <span class="menu__line--middle"></span>
    <span class="menu__line--bottom"></span>
  </div>
  <div class="modal-wrapper" v-show="isShowModal">
    <div @click="toggleIsShowModal" class="menu open" id="menu">
      <span class="menu__line--top"></span>
      <span class="menu__line--middle"></span>
      <span class="menu__line--bottom"></span>
    </div>
    <ul class="modal-contents">
      <li><a href="/">Home</a></li>
      <li><a href="/register">Registration</a></li>
      <li><a href="/login">Login</a></li>
    </ul>
  </div>
</div>
<script>
  const modal = new Vue({
    el:'#modal',
    data: {
      isShowModal: false,
    },
    methods: {
      toggleIsShowModal: function(){
      this.isShowModal = !this.isShowModal;
      }
    }
  });
</script>
<style>
    .modal-wrapper{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: white;
      z-index:10;
    }
    .modal-contents{
      margin-top:100px;
      list-style:none;
      text-align: center;
    }
    .modal-contents li{
      margin-bottom:20px;
    }
    .modal-contents li a{
      color:royalblue;
      text-decoration:none;
      font-size:30px;
    }
    .menu {
    display: inline-block;
    width: 40px;
    height: 40px;
    cursor: pointer;
    background:royalblue;
    position:relative;
    border-radius:5px;
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.3);
    }
    .open{
      top:30;
      left:100;
    }
    .menu__line--top,
    .menu__line--middle,
    .menu__line--bottom {
      display: inline-block;
      height: 1px;
      background-color: white;
      position: absolute;
      transition: 0.5s;
      margin:0 3px;
    }
    .menu__line--top {
      top: 11px;
      left:5px;
      width: 12px;
    }
    .menu__line--middle {
      top: 20px;
      left:5px;
      width:24px;
    }
    .menu__line--bottom {
      bottom: 11px;
      left:5px;
      width:7px;
    }
</style>