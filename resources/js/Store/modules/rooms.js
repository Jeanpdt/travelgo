import axios from 'axios';

const state = {
	count: 0,
	test: null
};

const getters = {

};

const actions = {
	async addTeste(state) {
	  const {data} = await axios.post('http://localhost:8000/api/teste/add', state.test);
	},
	setTest({commit}, test) {
		commit('SET_TESTE', test);
	}
};

const mutations = {
	increment (state) {
		state.count++;

	},
	SET_TESTE(state, room) {
		state.test = room;
	}
};


export default {
	namespaced: true,
	state,
	getters,
	actions,
	mutations
};
