require('./bootstrap');

window.Vue = require('vue');

import VueTheMask from 'vue-the-mask'
import money from 'v-money'
import VueAxios from 'vue-axios';
import axios from 'axios';
import App from './App.vue';
import VueRouter from 'vue-router';
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(VueAxios, axios);
Vue.use(VueTheMask, {masked: false});
Vue.use(money, {precision: 2, thousands: ' ', prefix: '$', masked: false});
Vue.use(BootstrapVue);
Vue.use(VueRouter);

import HomeComponent from './components/HomeComponent';
import AddFundsComponent from './components/AddFundsComponent';

const routes = [
    {
        name: 'home',
        path: '/',
        component: HomeComponent
    },
    {
        name: 'addFunds',
        path: '/addFunds/:operator',
        component: AddFundsComponent,
        props: true,
    }
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
