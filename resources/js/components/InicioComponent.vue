<template>
  <div class="container">
    <h1>Bienvenido a posteos</h1>
    <div v-if="!token">
    <router-link to="/login">Iniciar sesion</router-link>
    <router-link to="/register">registrarse</router-link>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <ul v-if="posts && posts.length">
          <li v-for="post of posts" :key="post.id">
            <p>
              <strong>{{post.title}}</strong>
            </p>
            <p>{{post.body}}</p>
          </li>
        </ul>

        <ul v-if="errors && errors.length">
          <h4>Ocurrio un error para mostrar los post</h4>
          <li style="color:red" v-for="error of errors" :key="error.id">{{error.message}}</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      posts: [],
      errors: [],
      token: localStorage.token
    }
  },
  methods: {
    async testconsole() {
      try {
        const response = await this.$api.getArticles()
        console.log(response.data)
        console.log(response.status)
        console.log(response.statusText)
        console.log(response.headers)
        console.log(response.config)
        this.posts = response.data
      } catch (error) {
        this.errors.push(error)

      }
    }
  },
  mounted() {
    this.testconsole()
  }
}
</script>
