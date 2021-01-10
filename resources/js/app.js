/* eslint-env node */
require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

import router from './Router/index';
import store from './Store/index';
import App from './App';

Vue.use(VueRouter);

// eslint-disable-next-line no-unused-vars
const app = new Vue({
	el: '#app',
	router,
	store,
	components: { App },

});

