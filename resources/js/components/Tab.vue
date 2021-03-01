<template>
    <div class="vue">
          <ul id="myTabs" class="nav nav-tabs col-md-7">
      <li role="presentation" class="active" v-on:click="change('1')" v-bind:class="{'active': isActive === '1'}"><a href="#home"  aria-controls="home" role="tab" data-toggle="tab" class="nav-link active" >家電</a></li>
      <li role="presentation" v-on:click="change('2')" v-bind:class="{'active': isActive === '2'}"><a href="#gadget" aria-controls="gadget" role="tab" data-toggle="tab" class="nav-link" >ガジェット</a></li>
      <li role="presentation" v-on:click="change('3')" v-bind:class="{'active': isActive === '3'}"><a href="#cooking" aria-controls="cooking" role="tab" data-toggle="tab" class="nav-link" >食事</a></li>
    </ul>

      <ul class="contents">
        <li v-if="isActive === '1'">{{ message }}</li>
        <li v-else-if="isActive === '2'">コンテンツ2コンテンツ2コンテンツ2コンテンツ2</li>
        <li v-else-if="isActive === '3'">コンテンツ3コンテンツ3コンテンツ3コンテンツ3</li>
      </ul>
    </div>

    
</template>

<script>
  export default {
  data() {
          return {
    isActive: '1',
    message: 'Hello Vue!'
          }
  },
  methods: {
    change: function(num){
      this.isActive = num
    }
  },
}
</script>