<template>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-6">
        <div class="card card-default">
          <div class="card-header">
            Register
          </div>
          <div class="card-body">
            <div
              v-if="has_error && !success"
              class="alert alert-danger"
            >
              <p v-if="error == 'registration_validation_error'">
                Validation Errors.
              </p>
              <p v-else>
                Error, can not register at the moment. If the problem persists, please contact an administrator.
              </p>
            </div>
            <form
              v-if="!success"
              autocomplete="off"
              method="post"
              @submit.prevent="register"
            >
              <div
                class="form-group"
                :class="{ 'has-error': has_error && errors.name }"
              >
                <label for="name">Name</label>
                <input
                  id="name"
                  v-model="name"
                  type="text"
                  class="form-control"
                  placeholder="Full Name"
                >
                <span
                  v-if="has_error && errors.name"
                  class="help-block"
                >{{ errors.name }}</span>
              </div>
              <div
                class="form-group"
                :class="{ 'has-error': has_error && errors.email }"
              >
                <label for="email">E-mail</label>
                <input
                  id="email"
                  v-model="email"
                  type="email"
                  class="form-control"
                  placeholder="user@example.com"
                >
                <span
                  v-if="has_error && errors.email"
                  class="help-block"
                >{{ errors.email }}</span>
              </div>
              <div
                class="form-group"
                :class="{ 'has-error': has_error && errors.password }"
              >
                <label for="password">Password</label>
                <input
                  id="password"
                  v-model="password"
                  type="password"
                  class="form-control"
                >
                <span
                  v-if="has_error && errors.password"
                  class="help-block"
                >{{ errors.password }}</span>
              </div>
              <div
                class="form-group"
                :class="{ 'has-error': has_error && errors.password }"
              >
                <label for="password_confirmation">Password confirmation</label>
                <input
                  id="password_confirmation"
                  v-model="password_confirmation"
                  type="password"
                  class="form-control"
                >
              </div>
              <button
                type="submit"
                class="btn btn-primary"
              >
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
	data() {
		return {
			name: '',
			email: '',
			password: '',
			password_confirmation: '',
			has_error: false,
			error: '',
			errors: {},
			success: false
		};
	},
	methods: {
		register() {
			var app = this;
			this.$auth.register({
				data: {
					name: app.name,
					email: app.email,
					password: app.password,
					password_confirmation: app.password_confirmation
				},
				success: function () {
					app.success = true;
					this.$router.push({name: 'login', params: {successRegistrationRedirect: true}});
				},
				error: function (res) {
					app.has_error = true;
					app.error = res.response.data.error;
					app.errors = res.response.data.errors || {};
				}
			});
		}
	}
};
</script>
