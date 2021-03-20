import Vue from 'vue'
import App from './App.vue'
import router from './router' //index.jsのexport default routerから受け取る
import store from "./index";

Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')