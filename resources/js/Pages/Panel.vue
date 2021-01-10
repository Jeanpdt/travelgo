<template>
  <div class="container-fluid">
    <navbar :user="user.name" />
    <div class="panel">
      <div
        v-for="room in rooms"
        :key="`room_${room.id}`"
        class="panel__card card mb-4"
        @click="goToRoom(room)"
      >
        <div class="card-body d-flex">
          <div
            class="col-md-6"
          >
            <img
              class="panel__img"
              :src="getImageSrc(room.imagem_url)"
              alt=""
            >
          </div>
          <div class="col-md-6 d-flex flex-column justify-content-between">
            <div>
              <h4>{{ room.titulo }}</h4>
              <span>{{ room.quantidade_hospedes }} Hóspedes -</span>
              <span>{{ room.quantidade_quartos }} Quarto -</span>
              <span>{{ room.quantidade_camas }} Cama -</span>
              <span>{{ room.quantidade_banheiros }} Banheiro</span>
            </div>
            <div class="d-flex justify-content-end">
              <span class="panel__price">{{ room.preco }}</span>
              <span class="panel__price">/ mês</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex';
import Navbar from '../Components/Navbar';
export default {
	name: 'Panel',
	components: { Navbar },
	computed: {
		...mapGetters({
			user: 'users/user',
			rooms: 'rooms/rooms'
		})
	},
	created() {
		this.$store.dispatch('users/getUser');
		this.$store.dispatch('rooms/getRooms');
	},
	methods: {
		getImageSrc(image){
			if(image) {
				return image;
			} else {
				return '';
			}
		},
		goToRoom(room){
			this.$router.push({
				name: 'room',
				params: { id: room.id}
			});
		}
	}
};
</script>

<style scoped>
.panel {

}

.panel__card {
  cursor: pointer;
  height: 400px;
}

.panel__img {
  object-fit: cover;
  width: 100%;
  height: 100%;
  border-radius: 5px;
}

.panel__price {
  font-size: 1.5rem;
}

</style>
