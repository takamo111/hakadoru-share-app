import './bootstrap'

import Vue from 'vue'
import App from './App'
import ArticleLike from './components/ArticleLike'
import Tab from './components/Tab'
import FollowButton from './components/FollowButton'


const app = new Vue({
  el: '#app',
  components: {
    App,
    ArticleLike,
    Tab,
    FollowButton,
  }
})

