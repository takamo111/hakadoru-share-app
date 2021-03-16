import './bootstrap'
import Vue from 'vue'
import ArticleLike from './components/ArticleLike'
import Example from './components/Example'
import Tab from './components/Tab'
import FollowButton from './components/FollowButton'



const app = new Vue({
  el: '#app',


  components: {
    ArticleLike,
    Tab,
    Example,
    FollowButton,

  
  }
})

