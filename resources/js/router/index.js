import {createRouter, createWebHistory} from "vue-router";

import Index from '/resources/js/components/pages/index.vue'
import Schedule from '/resources/js/components/pages/schedule.vue';
import Services from '/resources/js/components/pages/services.vue'; 
import Gallery from '/resources/js/components/pages/gallery.vue'; 
import Auth from '/resources/js/components/pages/auth.vue'; 
import Profile from '/resources/js/components/pages/profile.vue'
import notFound from '../components/NotFound.vue'

const routes =[
    {

        path:'/',
        component: Index

    },
    {
        path:'/services',
        component: Services
    },
    {
        path: '/schedule',
        component: Schedule  
    },
    {
        path: '/gallery',
        component: Gallery  

    },
    {
        path: '/auth',
        component: Auth 
    },
    {
        path: '/profile',
        component: Profile
    },
    {
        path: '/:pathMatch(.*)*',
        component: notFound
    }];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router