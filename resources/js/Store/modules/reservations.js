import axios from 'axios';

const state = {
	reservation_data: {
		data_inical: null,
		data_final: null
	}
};

const getters = {
	rooms: state => {
		return state.rooms;
	},
	room: state => {
		return state.room;
	}
};

const actions = {
	async makeReservation({state}, data) {
		console.log(state);
		try {
			const reservation = {
				user_id: data.userId,
				quarto_id: parseInt(data.quartoId),
				data_inical: state.reservation_data.data_inical,
				data_final: state.reservation_data.data_final,
			};

			console.log(reservation);

			await axios.post('http://localhost:8000/api/reservation/add', reservation);

		} catch (e) {
			console.log(e);
		}
	},
	async getReservationsByUser({dispatch}, userId) {
		try {
			const {data} = await axios.get('http://localhost:8000/api/room', {
				params:{
					userId: userId
				}
			});
			dispatch('setRooms', data);
		} catch (e) {
			console.log(e);
		}
	},
	setDataInicial({commit}, dataInicial) {
		commit('SET_DATA_INICIAL', dataInicial);
	},
	setDataFinal({commit}, dataFinal) {
		commit('SET_DATA_FINAL', dataFinal);
	}
};

const mutations = {
	SET_DATA_INICIAL(state, dataInicial) {
		state.reservation_data.data_inical = dataInicial;

	},
	SET_DATA_FINAL(state, dataFinal) {
		state.reservation_data.data_final = dataFinal;
	},
};

export default {
	namespaced: true,
	state,
	getters,
	actions,
	mutations
};
