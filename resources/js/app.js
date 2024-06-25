import './bootstrap';
import { createApp } from 'vue';

import app from '/resources/js/components/app.vue';
import '../css/app.css';
import router from '/resources/js/router/index.js';

createApp(app).use(router).mount('#app')