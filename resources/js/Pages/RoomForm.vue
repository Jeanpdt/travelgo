<template>
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input
          id="inputEmail4"
          type="email"
          class="form-control"
          placeholder="Email"
        >
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input
          id="inputPassword4"
          type="password"
          class="form-control"
          placeholder="Password"
        >
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input
        id="inputAddress"
        type="text"
        class="form-control"
        placeholder="1234 Main St"
      >
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input
        id="inputAddress2"
        type="text"
        class="form-control"
        placeholder="Apartment, studio, or floor"
      >
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input
          id="inputCity"
          type="text"
          class="form-control"
        >
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select
          id="inputState"
          class="form-control"
        >
          <option selected>
            Choose...
          </option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input
          id="inputZip"
          type="text"
          class="form-control"
        >
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input
          id="gridCheck"
          class="form-check-input"
          type="checkbox"
        >
        <label
          class="form-check-label"
          for="gridCheck"
        >
          Check me out
        </label>
      </div>
    </div>
    <button
      type="submit"
      class="btn btn-primary"
    >
      Sign in
    </button>
  </form>
</template>

<script>
export default {
	name: 'RoomForm'
};
</script>

<style scoped>

</style>
