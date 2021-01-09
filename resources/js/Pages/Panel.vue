<template>
  <div>
    <navbar />
    <div>
      <div
        v-for="room in rooms"
        :key="`room_${room.id}`"
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
};
</script>

<style scoped>

</style>
