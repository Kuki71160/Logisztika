import { createRouter, createWebHistory } from 'vue-router';
//import MainPage from '../Pages/MainPage.vue';
import UserInput from '../Pages/UserInput.vue';
//import CategoryInput from '../Pages/CategoryInput.vue';
//import ProductInput from '../Pages/ProductInput.vue';
import App from '../Pages/App.vue';

const routes = [
    { path: '/', component: App },
    { path: '/users', component: UserInput },
    //{ path: '/categories', component: CategoryInput },
   //{ path: '/products', component: ProductInput },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;