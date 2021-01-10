<template>
  <div class="main d-flex flex-column justify-content-center align-items-center">
    <h1>Milhares de locais para você!</h1>
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
export default {
	name: 'Home',
};
</script>

<style scoped>
.main {
  height: 100vh;
}
</style>
