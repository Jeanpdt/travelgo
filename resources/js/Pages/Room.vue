<template>
  <div class="container-fluid">
    <Navbar />
    <div class="room">
      <div class="room__image-cover">
        <img
          class="room__image"
          :src="getImageSrc(room.imagem_url)"
          alt=""
        >
      </div>
      <div class="room__content mt-4 mb-4">
        <div class="d-flex justify-content-between">
          <div class="col-md-8">
            <h3>{{ room.titulo }}</h3>
            <div>
              <p>{{ room.descricao_quarto }}</p>
            </div>
          </div>
          <div
            class="card col-md-4"
            style="width: 18rem;"
          >
            <div
              class="card-body"
            >
              <form @submit.prevent="makeReservation">
                <h5 class="card-title">
                  $ {{ room.preco }} / noite
                </h5>
                <div class="d-flex justify-content-between input-group mb-3">
                  <div class="form-group">
                    <label
                      class="control-label"
                      for="inputDataInicial"
                    >Data inicial</label>
                    <div class="">
                      <input
                        id="inputDataInicial"
                        v-model="data_inical"
                        class="form-control"
                        type="date"
                        value="2011-08-19"
                        required
                      >
                    </div>
                  </div>
                  <div class="form-group">
                    <label
                      class="control-label"
                      for="inputDataFinal"
                    >Data final</label>
                    <div class="">
                      <input
                        id="inputDataFinal"
                        v-model="data_final"
                        class="form-control"
                        type="date"
                        value="2011-08-19"
                        required
                      >
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <button
                    type="submit"
                    class="room__button card-title"
                  >
                    Alugar
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '../Components/Navbar';
import {mapGetters} from 'vuex';

export default {
	name: 'Room',
	components: {Navbar},
	computed: {
		data_inical: {
			set(val) {
				return this.$store.dispatch('reservations/setDataInicial', val);
			},
			get() {
				return this.$store.state.reservations.reservation_data.data_inical;
			}
		},
		data_final: {
			set(val) {
				return this.$store.dispatch('reservations/setDataFinal', val);
			},
			get() {
				return this.$store.state.reservations.reservation_data.data_final;
			}
		},
		...mapGetters({
			user: 'users/user',
			room: 'rooms/room'
		})
	},
	created() {
		this.$store.dispatch('rooms/getRoom', this.$route.params.id);
	},
	methods: {
		makeReservation() {
			this.$store.dispatch('reservations/makeReservation', {
				quartoId: this.$route.params.id,
				userId: this.user.id
			});

			this.$router.push('/panel');
		},
		getImageSrc(image){
			if(image){
				return image;
			} else {
				return '';
			}
		},
	}
};
</script>

<style scoped>
.room__image-cover {
  height: 600px;
}
.room__image {
  object-fit: cover;
  width: 100%;
  height: 100%;
  border-radius: 5px;
}

.room__button {
  width: 150px;
}

.room__content {

}
</style>
