<template>
<div>
          <button v-on:click="showMessage">ボタン</button>
 
        <p>{{ msg }}</p>
        </div>
</template>

<script>
  export default {

    data() {
            return {
                msg: ""
            };
        },
        methods: {
            showMessage: function () {
                this.msg = 'こんにちわ'
            }
        },
  }
</script>
