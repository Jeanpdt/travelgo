import axios from 'axios';

const state = {
	rooms: {},
	room: {},
	form: {
	  imagem_url: null,
		quantidade_camas: null,
		preco: null,
		titulo: null,
		quantidade_banheiros: null,
		descricao_quarto: null,
		quantidade_hospedes: null,
		quantidade_quartos: null,
		numero: null,
		cidade: null,
		estado: null,
		pais: null,
		cep: null,
		rua: null
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
	async addRoom({state}) {
		try {
			const room = JSON.parse(JSON.stringify(state.form));

			await axios.post('http://localhost:8000/api/room/add', room);

		} catch (e) {
			console.log(e);
		}
	},
	async getRooms({dispatch}) {
		try {
			const {data} = await axios.get('http://localhost:8000/api/room');
			dispatch('setRooms', data);
		} catch (e) {
			console.log(e);
		}
	},
	async getRoom({dispatch}, roomId){
		try {
			const {data} = await axios.get(`http://localhost:8000/api/room/${roomId}`);
			dispatch('setRoom', data);
		} catch (e) {
			console.log(e);
		}
	},
	setRooms({commit}, rooms) {
		commit('SET_ROOMS', rooms);
	},
	setQuantidadeCamas({commit}, quantidade_camas) {
		commit('SET_QUANTIDADE_CAMAS', quantidade_camas);
	},
	setPreco({commit}, preco) {
		commit('SET_PRECO', preco);
	},
	setTitulo({commit}, titulo) {
		commit('SET_TITULO', titulo);
	},
	setQuantidadeBanheiros({commit}, quantidade_banheiros) {
		commit('SET_QUANTIDADE_BANHEIROS', quantidade_banheiros);
	},
	setDescricaoQuarto({commit}, descricao_quarto) {
		commit('SET_DESCRICAO_QUARTO', descricao_quarto);
	},
	setQuantidadeHospedes({commit}, quantidade_hospedes) {
		commit('SET_QUANTIDADE_HOSPEDES', quantidade_hospedes);
	},
	setQuantidadeQuartos({commit}, quantidade_quartos) {
		commit('SET_QUANTIDADE_QUARTO', quantidade_quartos);
	},
	setNumero({commit}, numero) {
		commit('SET_NUMERO', numero);
	},
	setCidade({commit}, cidade) {
		commit('SET_CIDADE', cidade);
	},
	setEstado({commit}, estado) {
		commit('SET_ESTADO', estado);
	},
	setPais({commit}, pais) {
		commit('SET_PAIS', pais);
	},
	setCep({commit}, cep) {
		commit('SET_CEP', cep);
	},
	setRua({commit}, rua) {
		commit('SET_RUA', rua);
	},
	setImagenUrl({commit}, imagemUrl) {
		commit('SET_IMAGEM_URL', imagemUrl);
	},
	setRoom({commit}, imagemUrl) {
		commit('SET_ROOM', imagemUrl);
	},
};

const mutations = {
	increment (state) {
		state.count++;

	},
	SET_DESCRICAO_QUARTO(state, descricao_quarto) {
		state.form.descricao_quarto = descricao_quarto;
	},
	SET_PRECO(state, preco) {
		state.form.preco = preco;
	},
	SET_TITULO(state, titulo) {
		state.form.titulo = titulo;
	},
	SET_QUANTIDADE_BANHEIROS(state, quantidade_banheiros) {
		state.form.quantidade_banheiros = quantidade_banheiros;
	},
	SET_QUANTIDADE_HOSPEDES(state, quantidade_hospedes) {
		state.form.quantidade_hospedes = quantidade_hospedes;
	},
	SET_QUANTIDADE_QUARTO(state, quantidade_quartos) {
		state.form.quantidade_quartos = quantidade_quartos;
	},
	SET_QUANTIDADE_CAMAS(state, quantidade_camas) {
		state.form.quantidade_camas = quantidade_camas;
	},
	SET_NUMERO(state, numero) {
		state.form.numero = numero;
	},
	SET_CIDADE(state, cidade) {
		state.form.cidade = cidade;
	},
	SET_ESTADO(state, estado) {
		state.form.estado = estado;
	},
	SET_PAIS(state, pais) {
		state.form.pais = pais;
	},
	SET_CEP(state, cep) {
		state.form.cep = cep;
	},
	SET_RUA(state, rua) {
		state.form.rua = rua;
	},
	SET_ROOMS(state, rooms) {
		state.rooms = rooms;
	},
	SET_IMAGEM_URL(state, imagemUrl) {
		state.form.imagem_url = imagemUrl;
	},
	SET_ROOM(state, room) {
		state.room = room;
	},
};

export default {
	namespaced: true,
	state,
	getters,
	actions,
	mutations
};
