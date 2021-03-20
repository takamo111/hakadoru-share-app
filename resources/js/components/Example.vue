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

    };
  },
    computed: {
    msg() {
      return this.$store.state.appNumber;
    },
  },

};
</script>