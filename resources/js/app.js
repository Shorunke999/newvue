import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler.js";
import App from './components/App.vue';
import router from './router.js';
const app = createApp();
app.component('app-root', App)
.use(router)
.mount("#App");
