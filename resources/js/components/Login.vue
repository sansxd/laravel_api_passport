<template>
  <v-container>
    <form>
      <v-row>
        <v-col cols="12" md="4">
          <v-text-field v-model="email" label="E-mail" required></v-text-field>
        </v-col>
        <v-col cols="12" md="4">
          <v-text-field type="password" v-model="password" label="Contraseña" required></v-text-field>
        </v-col>
      </v-row>
      <v-btn class="mr-4" @click="submit">Ingresar</v-btn>
    </form>
    <div>
      <ul v-if="errors && errors.length">
        <h4>Ocurrio un error</h4>
        <li style="color:red" v-for="error of errors" :key="error.id">{{error.message}}</li>
      </ul>
    </div>
    <div v-if="this.paso">
      <v-progress-circular
        indeterminate="indeterminate"
        rotate="rotate"
        color="light-blue"
      >Loading...</v-progress-circular>
    </div>
  </v-container>
</template>

<script>
export default {
  data: () => ({
    password: "",
    email: "",
    token: "",
    paso: false,
    errors: []
  }),
  methods: {
    async submit() {
      try {
        this.paso = true;
        const data = {
          email: this.email,
          password: this.password
        };
        const response = await this.$api.login(data);
        const access_token = response.data.access_token;
        localStorage.token = access_token;
         this.paso = false;
         this.$router.push('/');
      } catch (error) {
        this.errors.push(error);
        console.log(error);
         this.paso = false;
      }
    }
  }
};
</script>
