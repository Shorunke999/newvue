import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler.js";
import home from './components/home.vue';
const app = createApp();
app.component('home-vue',home)
.mount("#App");
