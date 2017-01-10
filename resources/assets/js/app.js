
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Import vue-material
import VueMaterial from 'vue-material'
// import 'vue-material/dist/vue-material.css'

// Enable Vue Material in my application
Vue.use(VueMaterial);




Vue.component('example', require('./components/Example.vue'));
Vue.component('room-list', require('./components/Room-list.vue'));
Vue.component('room', require('./components/Room.vue'));

const app = new Vue({
    el: '#app',
    components: {

    }
});
