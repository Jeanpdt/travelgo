<template>
  <div>
    <navbar />
    <div>
      <div
        v-for="room in rooms"
        :key="`room_${room.id}`"
      >
        <img
          :src="getImageSrc(room.imagem_url)"
          alt=""
        >
        {{ room.imagem_url }}
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '../Components/Navbar';
export default {
	name: 'Panel',
	components: {Navbar},
	computed: {
		rooms() {
			return this.$store.state.rooms.rooms;
		}
	},
	mounted() {
		this.$store.dispatch('rooms/getRooms');
	},
  methods: {
    getImageSrc(image){
      if(image){
        return image;
      }
    },
  }
};
</script>

<style scoped>

</style>
