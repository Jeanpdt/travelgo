import axios from 'axios';

const state = {
	user: {},
	user_data: {
		id: null,
		email: null,
		name: null
	}
};

const getters = {
	user: state => {
		return state.user_data;
	},
};

const actions = {
	async getUser({dispatch}){
		try {
			const {data} = await axios.get('http://localhost:8000/api/auth/user');
			dispatch('setId', data.data.id);
			dispatch('setEmail', data.data.email);
			dispatch('setName', data.data.name);
		} catch (e) {
			console.log(e);
		}
	},
	setId({commit}, userId) {
		commit('SET_ID', userId);
	},
	setEmail({commit}, email) {
		commit('SET_EMAIL', email);
	},
	setName({commit}, name) {
		commit('SET_NAME', name);
	},
};

const mutations = {
	SET_ID(state, userId) {
		state.user_data.id = userId;
	},
	SET_EMAIL(state, email) {
		state.user_data.email = email;
	},
	SET_NAME(state, name) {
		state.user_data.name = name;
	},
};

export default {
	namespaced: true,
	state,
	getters,
	actions,
	mutations
};
