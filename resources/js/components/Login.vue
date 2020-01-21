<template>
  <form>
      <v-row>
        <v-col
          cols="12"
          md="4"
        >
          <v-text-field
            v-model="email"
            label="E-mail"
            required
          ></v-text-field>
        </v-col>
        <v-col
          cols="12"
          md="4"
        >
          <v-text-field
            v-model="password"
            label="Contraseña"
            required
          ></v-text-field>
        </v-col>
      </v-row>
      <v-btn class="mr-4" @click="submit">Ingresar</v-btn>
  </form>
</template>

<script>
export default {
    data: () => ({
      valid: false,
      password: '',
      email: '',
      token: 'aaaa'
    }),
    methods: {
        async submit(){
          try {
            const data ={
              email: this.email,
              password: this.password
            }
            const response = await this.$api.login(data)
            const access_token = response.data.access_token
            localStorage.token = access_token

          } catch (error) {
            console.log(error)
          }
        }
        
    },
}
</script>
