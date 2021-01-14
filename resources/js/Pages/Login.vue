<template>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-6">
        <div class="card card-default">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <div
              v-if="has_error && !success"
              class="alert alert-danger"
            >
              <p v-if="error == 'login_error'">
                Validation Errors.
              </p>
              <p v-else>
                Error, unable to connect with these credentials.
              </p>
            </div>
            <form
              autocomplete="off"
              method="post"
              @submit.prevent="login"
            >
              <div class="form-group">
                <label for="email">E-mail</label>
                <input
                  id="email"
                  v-model="email"
                  type="email"
                  class="form-control"
                  placeholder="user@example.com"
                  required
                >
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  id="password"
                  v-model="password"
                  type="password"
                  class="form-control"
                  required
                >
              </div>
              <button
                type="submit"
                class="btn btn-primary"
              >
                Entrar
              </button>
              <button
                type="button"
                class="btn btn-primary"
                @click="goToRegister"
              >
                Registrar-se
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
			email: null,
			password: null,
			success: false,
			has_error: false,
			error: ''
		};
	},
	mounted() {
		//
	},
	methods: {
		login() {
			const app = this;

			this.$auth.login({
				data: {
					email: app.email,
					password: app.password
				},
				success: function() {
					app.success = true;
					this.$router.push({name: 'panel'}).catch(() => {});
				},
				error: function(res) {
					app.has_error = true;
					app.error = res.response.data.error;
				},
				rememberMe: true,
				fetchUser: true
			});
		},
		goToRegister() {
      this.$router.push('/register');
		}
	}
};
</script>
