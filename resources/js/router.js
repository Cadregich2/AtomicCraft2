import {createRouter, createWebHistory} from 'vue-router';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: () => import('./components/Home.vue'),
            name: 'home'
        },
        {
            path: '/test',
            component: () => import('./components/Test.vue'),
            name: 'test'
        }
    ],
});

export default router;
