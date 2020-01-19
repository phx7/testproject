import VueRouter from 'vue-router'
import HomeComponent from "./components/HomeComponent";
import AddFundsComponent from "./components/AddFundsComponent";
import LoginComponent from "./components/LoginComponent";
import IndexComponent from "./components/IndexComponent";
// Routes
const routes = [
    {
        name: 'index',
        path: '/',
        component: IndexComponent,
        meta: {
            auth: undefined
        }
    },
    {
        name: 'home',
        path: '/home',
        component: HomeComponent,
        meta: {
            auth: true
        }
    },
    {
        name: 'addFunds',
        path: '/addFunds/:operator',
        component: AddFundsComponent,
        props: true,
        meta: {
            auth: true
        }
    },
    {
        path: '/login',
        name: 'login',
        component: LoginComponent,
        meta: {
            auth: undefined
        }
    }
];
const router = new VueRouter({
    history: true,
    mode: 'history',
    routes,
});
export default router
