/*
|-------------------------------------------------------------------------------
| routes.js
|-------------------------------------------------------------------------------
| Contains all of the routes for the application
*/

/*
    Imports Vue and VueRouter to extend with the routes.
*/
import Vue from 'vue';
import VueRouter from 'vue-router';

/*
    Extends Vue to use Vue Router
*/
Vue.use(VueRouter);

/*
    Makes a new VueRouter that we will use to run all of the routes
    for the app.
*/
export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'inicio',
            component: Vue.component(
                'Inicio',
                require('./components/InicioComponent.vue').default
            )
        },
        {
            path: '/login',
            name: 'login',
            component: Vue.component(
                'Login',
                require('./components/Login.vue').default
            )
        },
        {
            path: '/register',
            name: 'register',
            component: Vue.component(
                'Register',
                require('./components/Register.vue').default
            )
        },
        {
            path: '*',
            component: Vue.component(
                'Example',
                require('./components/NotFoundComponent.vue').default
            )
        }
    ]
});
