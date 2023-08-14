import './bootstrap';
import App from './components/App.vue';
import {createApp} from "vue";
import * as bootstrap from "bootstrap";

const app = createApp(App);
app.mount('#app');
