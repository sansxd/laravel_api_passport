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
            name: 'example',
            component: Vue.component(
                'Example',
                require('./components/ExampleComponent.vue').default
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
