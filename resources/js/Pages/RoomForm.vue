<template>
  <!--  <form method="POST">-->
  <!--    <div class="form-row">-->
  <!--      <div class="form-group col-md-6">-->
  <!--        <label for="inputEmail4">Email</label>-->
  <!--        <input-->
  <!--          id="inputEmail4"-->
  <!--          v-model="test"-->
  <!--          type="email"-->
  <!--          class="form-control"-->
  <!--          placeholder="Email"-->
  <!--        >-->
  <!--      </div>-->
  <!--    </div>-->

  <!--    <button-->
  <!--      type="button"-->
  <!--      class="btn btn-primary"-->
  <!--      @click="addTest()"-->
  <!--    >-->
  <!--      Sign in-->
  <!--    </button>-->
  <!--  </form>-->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Laravel Vue JS File Upload Demo
          </div>

          <div class="card-body">
            <div
              v-if="success != ''"
              class="alert alert-success"
            >
              {{ success }}
            </div>

            <form
              enctype="multipart/form-data"
              @submit="formSubmit"
            >
              <input
                type="file"
                class="form-control"
                @change="onChange"
              >
              <button class="btn btn-primary btn-block">
                Upload
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <img
      src="../../../public/storage/uploads/1610160063_der.png"
      alt=""
    >
  </div>
</template>

<script>
import axios from 'axios';
export default {
	name: 'RoomForm',
	data() {
	  return{
			name: '',
			file: '',
			success: ''
		};
	},
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
		},
		onChange(e) {
			this.file = e.target.files[0];
		},
		formSubmit(e) {
			e.preventDefault();
			let existingObj = this;

			const config = {
				headers: {
					'content-type': 'multipart/form-data'
				}
			};

			let data = new FormData();
			data.append('file', this.file);

			axios.post('http://localhost:8000/api/upload', data, config)
				.then(function (res) {
					existingObj.success = res.data.success;
				})
				.catch(function (err) {
					existingObj.output = err;
				});
		}
	}

};
</script>



<style scoped>

</style>
