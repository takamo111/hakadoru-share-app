import './bootstrap'
import Vue from 'vue'
import ArticleLike from './components/ArticleLike'
import Tab from './components/Tab'
import FollowButton from './components/FollowButton'
import StarRating from 'vue-star-rating'
Vue.component('star-rating', StarRating);


const app = new Vue({
  el: '#app',
  components: {
    ArticleLike,
    Tab,
    FollowButton,
  },
  data: {
    rating: 0
  }

})

