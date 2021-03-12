<template>
 <div class="">
   <h5 class="mb-3">コメント一覧</h5>
   <div class="container">
     <div v-for="comment in comments" :key="comment.id">
       <div class="row my-2">
         <small class="text-muted mr-4">{{comment.user.name}}</small>
           <div v-if="edit_time && comment.id == edit_comment.id">
           <input v-if="edit_time" type="text" v-model="edit_comment.text" class="px-2 py-2" placeholder="Type a Comment" />
           <button v-if="comment.user_id == current_user_id && edit_comment.text != ''" @click.prevent="update(edit_comment)" type="button" class=" btn btn-primary btn-sm">更新</button>
           <button v-if="edit_time" @click.prevent="back(comment)" type="button" class="btn btn-outline-dark btn-sm ml-1">戻る</button>
         </div>
         <div v-else>
           <p style="display: contents;">{{comment.text}}</p>
           <button v-if="comment.user_id == current_user_id" @click.prevent="edit(comment)" type="button" class="ml-4 btn btn-warning btn-sm">編集</button>
           <button v-if="comment.user_id == current_user_id || article_user_id == current_user_id" @click.prevent="destroy(comment.id)" type="button" class="ml-1 btn btn-danger btn-sm">削除</button>
         </div>
       </div>
     </div>
   </div>
 </div>
</template>

<script>
import {mapState} from 'vuex'
export default {
 props: ['article_id', 'current_user_id', 'article_user_id'],
 data() {
   return {
     edit_time: false,
     edit_comment: {}
   }
 },
 computed: {
   ...mapState("comment", ['comments'])
 },
 created() {
   this.getComments()
 },
 methods: {
   getComments() {
     const id = this.article_id
     this.$store.dispatch('comment/get_comments', id)
   },
   edit(comment) {
     this.edit_time = true
     this.edit_comment = comment
     this.edit_comment.old_text = comment.text
   },
   update(comment) {
     const update_comment = {
       text: comment.text
     }
     const id = this.article_id
     const array = ["/articles/",id,"/comments/", comment.id];
     const path = array.join('')
     axios.put(path, update_comment).then(res => {
       this.edit_time = false
       this.edit_comment = {}
       this.getComments()
     }).catch(function(err) {
       console.log(err)
     })
   },
   destroy(comment_id) {
     const id = this.article_id
     const array = ["/articles/",id,"/comments/", comment_id];
     const path = array.join('')
     axios.delete(path).then(res => {
       this.getComments()
     }).catch(function(err) {
       console.log(err)
     })
   },
   back(comment) {
     comment.text = comment.old_text
     this.edit_time = false
     this.edit_comment = {}
   }
 }
}
</script>

<style scoped>
.btn{
 height: 2rem;
}
</style>