<template>
  <div class="sample">
    <h1>{{ msg }}</h1>
  </div>
</template>

<script>
export default {
  name: 'sample',
  data() {
    return {
      msg: 'Welcome to My Vuex Sample',
    };
  },
    computed: {
    msg() {
      return this.$store.state.msg;
    },
    },
};
</script>