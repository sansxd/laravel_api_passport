// window.Vue = require('vue');
import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import Vuetify from 'vuetify';

import router from './router';
import App from './components/App';
import api from './utils/API';


Vue.use(VueAxios, axios);
Vue.use(Vuetify);
Vue.config.productionTip = false;
Vue.prototype.$api = api

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router
});
