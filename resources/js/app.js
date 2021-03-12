import './bootstrap'
import Vue from 'vue'
import ArticleLike from './components/ArticleLike'
import ExampleComponent from './components/ExampleComponent'
import Tab from './components/Tab'
import FollowButton from './components/FollowButton'
import Comment from './components/Comment'
import CommentList from './components/CommentList'
import Store from './Store/index'


const app = new Vue({
  el: '#app',
  components: {
    ArticleLike,
    Tab,
    ExampleComponent,
    FollowButton,
    Comment,
    CommentList,
    Store,
  }
})

