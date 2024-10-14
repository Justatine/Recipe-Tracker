import { createRouter, createWebHistory } from "vue-router";

import home from '../components/home.vue';
import index from '../components/index.vue';
import signin from '../components/auth/signin.vue';
import signup from '../components/auth/signup.vue';
import notfound from '../components/404.vue';

const routes = [
    {
        path: '/',
        component: index
    },
    {
        path: '/sign-in',
        component: signin
    },
    {
        path: '/sign-up',
        component: signup
    },
    {
        path: '/home',
        component: home
    },
    {
        path: '/:pathMatch(.*)*',
        component: notfound
    }
];

const router = createRouter({
    history: createWebHistory(),
    linkExactActiveClass: 'active',
    routes,
})

export default router;