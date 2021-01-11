<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a
      class="navbar__logo navbar-brand"
      @click="goToHome"
    >TravelGo</a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon" />
    </button>

    <div
      id="navbarSupportedContent"
      class="collapse navbar-collapse"
    >
      <ul class="navbar-nav mr-auto">
        <li
          class="navbar__link nav-item mr-2"
          @click="goToCreateRoom"
        >
          Novo quarto
        </li>
        <li
          class="navbar__link nav-item"
          @click="goToPanel"
        >
          Quartos disponíveis
        </li>
        <li
          class="navbar__link nav-item"
          @click="goToReservation"
        >
          Minhas reservas
        </li>
      </ul>
      <div>{{ user.name }}</div>
    </div>
  </nav>
</template>

<script>
import {mapGetters} from 'vuex';

export default {
	name: 'Navbar',
	computed: {
		...mapGetters({
			user: 'users/user',
		})
	},
	created() {
		this.$store.dispatch('users/getUser');
	},
	methods: {
	  goToPanel() {
	    this.$router.push({name: 'panel'});
		},
		goToHome() {
			this.$router.push({name: 'home'});
		},
		goToReservation() {
			this.$router.push({name: 'reservation'});
		},
		goToCreateRoom() {
			this.$router.push({name: 'roomCreate'});
		}

	}
};
</script>

<style scoped>
.navbar__link {
  padding: 8px;
}

.navbar__link:hover {
  cursor: pointer;
  border-radius: 4px;
  background-color: #b6b6b6;
}

.navbar__logo {
  cursor: pointer;
}

</style>
