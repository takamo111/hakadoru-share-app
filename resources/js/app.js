import './bootstrap'
import Vue from 'vue'
import ArticleLike from './components/ArticleLike'
import Test from './components/Test'
import ExampleComponent from './components/ExampleComponent'
import Tab from './components/Tab'
import FollowButton from './components/FollowButton'

const app = new Vue({
  el: '#app',
  components: {
    ArticleLike,
    Test,
    Tab,
    ExampleComponent,
    FollowButton,
  }
})