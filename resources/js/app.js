// window.Vue = require('vue');
import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import Vuetify from 'vuetify';

import router from './router';
import App from './components/App';
import API from './utils/API';

require('./bootstrap');

axios.create({
    baseURL: 'http://127.0.0.1:8000/api/v1'
});

Vue.use(VueAxios, axios);
Vue.use(Vuetify);
Vue.config.productionTip = false;

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router
});
