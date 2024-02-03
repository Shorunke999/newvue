import { createRouter, createWebHistory } from 'vue-router';
import container from './components/container.vue';
import cityView from './components/cityView.vue';
import navComponent from "./components/navComponent.vue";
import Authentication from "./components/Authentication.vue"

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: "/:user",
      name: "maincomp",
      component: container,
    },
    {
      path: "/weather/:state/:city",
      name: "cityView",
      component: cityView,
    },
    {
      path: "/nav",
      name: 'nav',
      component: navComponent,
    },
    {
      path:"/",
      component: Authentication,
    }
  ]
});

export default router;
