const Comment = {
  namespaced: true,
  state: {
    comments: []
  },
  mutations: {
    comments(state, id) {                               
      const array = ["/articles/",id,"/get_comments"];
      const path = array.join('')
      axios.get(path).then(res => {
        state.comments = res.data
      }).catch(function(err) {
        console.log(err)
      })
    }
  },
  actions: {
    get_comments({commit}, id) {
      commit('comments', id)
    }
  }
 }
 
 export default new Vuex.Store({          
  modules: {
    comment: Comment,
  }
 })