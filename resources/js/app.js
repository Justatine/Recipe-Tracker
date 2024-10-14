import './bootstrap';

import { createApp } from 'vue';
import app from './components/app.vue';
import header from './components/header.vue';
import footer from './components/footer.vue';
import signin from './components/auth/signin.vue';
import signup from './components/auth/signup.vue';

import router from './router';

createApp(app).use(router).mount('#app');
createApp(header).use(router).mount('#header');
createApp(footer).mount('#footer');
createApp(signin).mount('#signin');
createApp(signup).mount('#signup');