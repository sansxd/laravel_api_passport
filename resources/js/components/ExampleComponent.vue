<template>
  <div class="container">
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
          <li v-for="error of errors" :key="error.id">{{error.message}}</li>
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
      errors: []
    }
  },
  methods: {
    async testconsole() {
      try {
        const response = await axios.get(`api/articles`)
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
