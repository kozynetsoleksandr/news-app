import Vue from "vue";
import VueTreeNavigation from 'vue-tree-navigation';
import App from "./components/App";
import Navbar from "./components/parts/Navbar";
import Novelty from "./components/parts/novelties/index"
import VueRouter from "vue-router";
import Home from "./components/Home";
import Rubrics from "./components/Rubrics";
import Novelties from "./components/Novelties";
import Author from "./components/Author";

Vue.component('navbar', Navbar)
Vue.component('rubrics', Novelty)
require('./bootstrap');

window.Vue = require('vue').default;

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);



Vue.use(VueTreeNavigation);
Vue.use(VueRouter);


const router =  new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/rubrics',
            name: 'rubrics',
            component: Rubrics
        },
        {
            path: '/novelties',
            name: 'novelties',
            component: Novelties
        },
        {
            path: '/author',
            name: 'author',
            component: Author
        }

    ]
});

const app = new Vue({
    el: '#app',
    components: {App},
    router
});
