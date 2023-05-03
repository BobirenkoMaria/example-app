import '../views/vues/src/stores/auth.js';
import '../views/vues/src/stores/counter.js';

import '../views/vues/src/assets/main.css';
import '../views/vues/src/assets/main.css';

import { createApp } from "vue";
import App from '../views/vues/src/App.vue';
import router from "../views/vues/src/router";

createApp(App)
    .use(router)
    .mount('#app')