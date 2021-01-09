<template>
  <form method="POST">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input
          id="inputEmail4"
          v-model="test"
          type="email"
          class="form-control"
          placeholder="Email"
        >
      </div>
    </div>

    <button
      type="button"
      class="btn btn-primary"
      @click="addTest()"
    >
      Sign in
    </button>
  </form>
</template>

<script>

export default {
	name: 'RoomForm',
	computed: {
	  test: {
			set(val) {
				return this.$store.dispatch('rooms/setTest', val);
			},
	    get() {
	      return this.$store.state.rooms.test;
			}
		}
	},
	methods: {
		addTest() {
			this.$store.dispatch('rooms/addTeste');
		}
	}

};
</script>

<style scoped>

</style>
