import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler.js";
import { createRouter, createWebHistory } from 'vue-router';
import App from './components/App.vue';
import navComponent from './components/navComponent.vue';
import HomeView from './components/HomeView.vue';
const router = createRouter({
    history:createWebHistory(),
    routes:[{
        path:"/",
        name:"nav",
        component: navComponent,
    },
    {
        path:"/weather",
        name:"cityView",
        component: HomeView,
    }
]
});
const app = createApp();
app.component('app-root', App)
.use(router)
.mount("#App");
