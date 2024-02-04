import { createRouter, createWebHistory } from 'vue-router';
import container from './components/container.vue';
import cityView from './components/cityView.vue';
import Authentication from "./components/Authentication.vue";
import navComponent from "./components/navComponent.vue";

const router = createRouter({
  history: createWebHistory(),
  routes: [

    {
      path: "/cityView/:state/:city",
      name: "cityView",
      component: cityView,
    },
    {
      path: "/container",
      name: 'container',
      component: container,
    },
    {
      path:"/",
      component: Authentication,
    },
    {
      path:"/nav",
      component: navComponent,
    }
  ]
});

export default router;
