<template>
  <div class="main d-flex flex-column justify-content-center align-items-center">
    <h1>Milhares de locais para você!</h1>

    <a @click="addTeste('test')">clique-me</a>

    <router-link :to="{name: 'panel'}">
      <button
        type="button"
        class="btn btn-primary"
      >
        Comece já
      </button>
    </router-link>
  </div>
</template>

<script>
import { mapState } from 'vuex';
import axios from 'axios';

export default {
	name: 'Home',
	computed: {
		...mapState({
			count: state => state.rooms.count,
		})
	},
	async created() {
		const {data} = await axios.get('http://localhost:8000/api/auth/user');

		console.log(data);
	},
	methods: {
		async addTeste(teste) {
			this.$store.dispatch('rooms/addTeste', teste);


		}
	}
};
</script>

<style scoped>
.main {
  height: 100vh;
}
</style>
