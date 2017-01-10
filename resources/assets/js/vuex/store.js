import  Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.store({
    state: {
        shoppingCart: [],
    },
    mutations: {
        add (state, room) {
            state.shoppingCart = state.shoppingCart.concat(room)
        },
        remove (state, roomId) {
            state.shoppingCart = state.shoppingCart.filter( room => room._id !== roomId)
        },
    }
})