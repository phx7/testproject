import IndexComponent from "./components/IndexComponent";

require('./bootstrap');

import auth from './auth'
import 'es6-promise/auto'
import Vue from 'vue'
import VueTheMask from 'vue-the-mask'
import money from 'v-money'
import VueAxios from 'vue-axios'
import axios from 'axios'
import App from './App.vue'
import VueRouter from 'vue-router'
import router from "./router";
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

window.Vue = Vue;
Vue.router = router;
import VueAuth from '@websanova/vue-auth'
import HomeComponent from "./components/HomeComponent";

Vue.use(VueAxios, axios);
Vue.use(VueAuth, auth);
Vue.use(VueTheMask, {masked: false});
Vue.use(money, {precision: 2, thousands: ' ', prefix: '$', masked: false});
Vue.use(BootstrapVue);
Vue.use(VueRouter);

Vue.use(VueRouter);

Vue.use(VueAxios, axios);
Vue.use(VueAuth, auth);
// Load Index
// Vue.component('index', IndexComponent);
// Vue.component('home', HomeComponent);
// const app = new Vue({
//     el: '#app',
//     router
// });

const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
