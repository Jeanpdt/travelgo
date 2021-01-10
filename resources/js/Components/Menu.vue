<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <router-link
      :to="{name: 'home'}"
      class="navbar-brand"
    >
      Laravel + JWT + Vue JS
    </router-link>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon" />
    </button>

    <div
      id="navbarSupportedContent"
      class="collapse navbar-collapse"
    >
      <ul
        v-if="$auth.check(1)"
        class="navbar-nav mr-auto"
      >
        <li
          v-for="(route, key) in routes.user"
          :key="route.path"
          class="nav-item"
        >
          <router-link
            :key="key"
            :to="{ name : route.path }"
            class="nav-link"
          >
            {{ route.name }}
          </router-link>
        </li>
      </ul>
      <ul
        v-if="$auth.check(2)"
        class="navbar-nav mr-auto"
      >
        <li
          v-for="(route, key) in routes.user"
          :key="route.path"
          class="nav-item"
        >
          <router-link
            :key="key"
            :to="{ name : route.path }"
            class="nav-link"
          >
            {{ route.name }}
          </router-link>
        </li>
      </ul>
      <ul
        v-if="!$auth.check()"
        class="navbar-nav ml-auto"
      >
        <li
          v-for="(route, key) in routes.unlogged"
          :key="route.path"
          class="nav-item"
        >
          <router-link
            :key="key"
            :to="{ name : route.path }"
            class="nav-link"
          >
            {{ route.name }}
          </router-link>
        </li>
      </ul>
      <ul
        v-if="$auth.check()"
        class="navbar-nav ml-auto"
      >
        <li class="nav-item">
          <a
            class="nav-link"
            href="#"
            @click.prevent="$auth.logout()"
          >Logout</a>
        </li>
      </ul>
    </div>
  </nav>
</template>
<script>
export default {
	data() {
		return {
			routes: {
				// UNLOGGED
				unlogged: [
					{ name: 'Register', path: 'register' },
					{ name: 'Login', path: 'login'}
				],
				// LOGGED USER
				user: [
					{ name: 'Dashboard', path: 'dashboard' }
				],
				// LOGGED ADMIN
				admin: [
					{ name: 'Dashboard', path: 'admin.dashboard' }
				]
			}
		};
	},
	mounted() {
		//
	}
};
</script>

<style>
.navbar {
  margin-bottom: 30px;
}
</style>