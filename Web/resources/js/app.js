require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
import {
  routes
} from './routes'

Vue.use(VueRouter);

Vue.component('Navbar', require('./components/Navbar.vue').default);
Vue.component('Footer', require('./components/Footer.vue').default);
Vue.component('Intro', require('./components/Landing/Intro.vue').default);

const router = new VueRouter({
  mode: 'history',
  routes
});

const app = new Vue({
  el: '#app',
  router
});