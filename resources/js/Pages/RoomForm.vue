<template>
  <div class="container">
    <h1>Cadastrar quarto</h1>

    <div class="d-flex">
      <form
        class="col-md-10"
        @submit="addRoom"
      >
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputTitulo">Titulo</label>
            <input
              id="inputTitulo"
              v-model="titulo"
              type="text"
              class="form-control"
              placeholder="Email"
              required
            >
          </div>
          <div class="form-group col-md-4">
            <label for="inputEmail4">Preco</label>
            <input
              id="inputPreco"
              v-model="preco"
              type="text"
              class="form-control"
              placeholder="Email"
              required
            >
          </div>
          <div class="form-group col-md-4">
            <label for="inputPreco">Cep</label>
            <input
              id="inputPais"
              v-model="cep"
              type="text"
              class="form-control"
              placeholder="Email"
              required
            >
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputPais">Pais</label>
            <input
              id="inputEstado"
              v-model="pais"
              type="text"
              class="form-control"
              placeholder="Email"
              required
            >
          </div>
          <div class="form-group col-md-3">
            <label for="inputEstado">Estado</label>
            <input
              id="inputEmail4"
              v-model="estado"
              type="text"
              class="form-control"
              placeholder="Email"
              required
            >
          </div>
          <div class="form-group col-md-3">
            <label for="inputCidade">Cidade</label>
            <input
              id="inputCidade"
              v-model="cidade"
              type="text"
              class="form-control"
              placeholder="Email"
              required
            >
          </div>
          <div class="form-group col-md-3">
            <label for="inputNumero">Numero</label>
            <input
              id="inputNumero"
              v-model="numero"
              type="text"
              class="form-control"
              placeholder="Email"
              required
            >
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputRua">Rua</label>
            <input
              id="inputRua"
              v-model="rua"
              type="text"
              class="form-control"
              placeholder="Email"
              required
            >
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputQuantidadeDeCamas">Quantidade de camas</label>
            <input
              id="inputQuantidadeDeCamas"
              v-model="quantidade_camas"
              type="number"
              class="form-control"
              placeholder="Email"
              required
            >
          </div>
          <div class="form-group col-md-3">
            <label for="inputQuantidadeDeBanheiros">Quantidade de banheiros</label>
            <input
              id="inputQuantidadeDeBanheiros"
              v-model="quantidade_banheiros"
              type="number"
              class="form-control"
              placeholder="Email"
              required
            >
          </div>
          <div class="form-group col-md-3">
            <label for="inputQuantidadeDeHospedes">Quantidade de hóspedes</label>
            <input
              id="inputQuantidadeDeHospedes"
              v-model="quantidade_hospedes"
              type="number"
              class="form-control"
              placeholder="Email"
              required
            >
          </div>
          <div class="form-group col-md-3">
            <label for="inputQuantidadeDeQuartos">Quantidade de quartos</label>
            <input
              id="inputQuantidadeDeQuartos"
              v-model="quantidade_quartos"
              type="number"
              class="form-control"
              placeholder="Email"
              required
            >
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="descricaoQuarto">Descrição</label>
            <textarea
              id="descricaoQuarto"
              v-model="descricao_quarto"
              type="text"
              class="form-control"
              placeholder="Email"
              required
            />
          </div>
        </div>

        <button
          type="submit"
          class="btn btn-primary"
        >
          Sign in
        </button>
      </form>

      <form
        enctype="multipart/form-data"
        class="col-md-2"
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

    <div class="card-body">
      <div
        v-if="success != ''"
        class="alert alert-success"
      >
        {{ success }}
      </div>
    </div>





    <!--        <div class="row justify-content-center">-->
    <!--          <div class="col-md-8">-->
    <!--            <div class="card">-->
    <!--              <div class="card-header">-->
    <!--                Laravel Vue JS File Upload Demo-->
    <!--              </div>-->

    <!--              -->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->

    <!--    <img-->
    <!--      src="../../../public/storage/uploads/1610160063_der.png"-->
    <!--      alt=""-->
    <!--    >-->
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
		quantidade_camas: {
			set(val) {
				return this.$store.dispatch('rooms/setQuantidadeCamas', val);
			},
			get() {
				return this.$store.state.rooms.form.quantidade_camas;
			}
		},
		preco: {
			set(val) {
				return this.$store.dispatch('rooms/setPreco', val);
			},
			get() {
				return this.$store.state.rooms.form.preco;
			}
		},
		titulo: {
			set(val) {
				return this.$store.dispatch('rooms/setTitulo', val);
			},
			get() {
				return this.$store.state.rooms.form.titulo;
			}
		},
		quantidade_banheiros: {
			set(val) {
				return this.$store.dispatch('rooms/setQuantidadeBanheiros', val);
			},
			get() {
				return this.$store.state.rooms.form.quantidade_banheiros;
			}
		},
		descricao_quarto: {
			set(val) {
				return this.$store.dispatch('rooms/setDescricaoQuarto', val);
			},
			get() {
				return this.$store.state.rooms.form.descricao_quarto;
			}
		},
		quantidade_hospedes: {
			set(val) {
				return this.$store.dispatch('rooms/setQuantidadeHospedes', val);
			},
			get() {
				return this.$store.state.rooms.form.quantidade_hospedes;
			}
		},
		quantidade_quartos: {
			set(val) {
				return this.$store.dispatch('rooms/setQuantidadeQuartos', val);
			},
			get() {
				return this.$store.state.rooms.form.quantidade_quartos;
			}
		},
		numero: {
			set(val) {
				return this.$store.dispatch('rooms/setNumero', val);
			},
			get() {
				return this.$store.state.rooms.form.numero;
			}
		},
		estado: {
			set(val) {
				return this.$store.dispatch('rooms/setEstado', val);
			},
			get() {
				return this.$store.state.rooms.form.estado;
			}
		},
		cidade: {
			set(val) {
				return this.$store.dispatch('rooms/setCidade', val);
			},
			get() {
				return this.$store.state.rooms.form.cidade;
			}
		},
		pais: {
			set(val) {
				return this.$store.dispatch('rooms/setPais', val);
			},
			get() {
				return this.$store.state.rooms.form.pais;
			}
		},
		cep: {
			set(val) {
				return this.$store.dispatch('rooms/setCep', val);
			},
			get() {
				return this.$store.state.rooms.form.cep;
			}
		},
		rua: {
			set(val) {
				return this.$store.dispatch('rooms/setRua', val);
			},
			get() {
				return this.$store.state.rooms.form.rua;
			}
		},
	},
	watch: {
	  success() {
			this.$store.dispatch('rooms/setImagenUrl', this.success);
		}
	},
	methods: {
		addRoom(e) {
			e.preventDefault();
			this.$store.dispatch('rooms/addRoom');
			this.$router.push('/panel');
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
