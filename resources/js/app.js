/* eslint-env node */
require('./bootstrap');


import 'es6-promise/auto';
import axios from 'axios';
import Vue from 'vue';
import VueAuth from '@websanova/vue-auth';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import store from './Store/index';
import App from './App';
import auth from './auth';
import router from './Router/index';



window.Vue = Vue;

Vue.router = router;
Vue.use(VueRouter);


// Set Vue authentication
Vue.use(VueAxios, axios);
axios.defaults.baseURL = `${process.env.MIX_APP_URL}/api`;

Vue.use(VueAuth, auth);


// eslint-disable-next-line no-unused-vars
const app = new Vue({
	el: '#app',
	router,
	store,
	components: { App },

});

