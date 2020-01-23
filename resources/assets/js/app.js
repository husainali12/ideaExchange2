
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue'

window.Vue = require('vue');
window.EventBus = new Vue;

import vuetify from './vuetify/index'

//Vue.use(vuetify)


Vue.component('AppHome', require('./components/AppHome.vue').default);

import router from './Router/router'

const app = new Vue({
    vuetify,
    router,
    el: '#app'
});
