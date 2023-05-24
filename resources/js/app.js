import {createApp} from "vue";

import Home from './Pages/Home.vue';

const app = createApp({});

app.component('home-page', Home);

app.mount("#app");
