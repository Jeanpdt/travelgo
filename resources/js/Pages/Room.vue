<template>
  <div class="container-fluid">
    <Navbar :user="user.name" />
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
          <div>
            <h3>{{ room.titulo }}</h3>
            <div>
              <p>{{ room.descricao_quarto }}</p>
            </div>
          </div>
          <div
            class="card"
            style="width: 18rem;"
          >
            <div class="card-body">
              <h5 class="card-title">
                $ {{ room.preco }} / noite
              </h5>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label
                    class="input-group-text"
                    for="inputGroupSelect01"
                  >Hóspedes</label>
                </div>
                <select
                  id="inputGroupSelect01"
                  class="custom-select"
                >
                  <option selected>
                    Choose...
                  </option>
                  <option value="1">
                    One
                  </option>
                  <option value="2">
                    Two
                  </option>
                  <option value="3">
                    Three
                  </option>
                </select>
              </div>
              <div class="d-flex justify-content-center">
                <button
                  type="button"
                  class="room__button card-title"
                >
                  Alugar
                </button>
              </div>
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
		...mapGetters({
			user: 'users/user',
			room: 'rooms/room'
		})
	},
	created() {
		this.$store.dispatch('rooms/getRoom', this.$route.params.id);
	},
	methods: {
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
