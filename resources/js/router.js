import { createRouter, createWebHistory } from 'vue-router';
import navComponent from './components/navComponent.vue';
import cityView from './components/cityView.vue';
const router = createRouter({
    history:createWebHistory(import.meta.env.BASE_URL),
    routes:[{
        path:"/",
        name:"nav",
        component: navComponent,
    },
    {
        path:"/weather/:state/:city",
        name:"cityView",
        component: cityView,
    }
]
});
export default router