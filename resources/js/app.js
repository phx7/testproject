require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
import App from './App.vue';

Vue.use(VueAxios, axios);

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
