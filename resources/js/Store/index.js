import Vue from 'vue';
import Vuex from 'vuex';

import rooms from './modules/rooms';
import users from './modules/users';
import reservations from './modules/reservations';

Vue.use(Vuex);

export default new Vuex.Store({
	modules: {
		rooms: rooms,
		users: users,
		reservations: reservations
	}
});

