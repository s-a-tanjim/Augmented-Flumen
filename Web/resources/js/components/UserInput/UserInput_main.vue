<template>
  <div>
    <component v-bind:is="'Navbar'"></component>
    <div class="section">
      <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
          <div class="col-sm-11 col-md-8">
            <form class="form-container" @submit.prevent="submitForm">
              <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input
                  :disabled="isLoading"
                  v-model="name"
                  type="text"
                  class="form-control"
                  id="exampleInputName"
                  placeholder="Name"
                />
              </div>
              <div class="form-group">
                <label for="exampleInputLocation">Affected Location</label>
                <input
                  :disabled="isLoading"
                  v-model="location"
                  type="text"
                  class="form-control"
                  id="exampleInputLocation"
                  placeholder="Location"
                />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input
                  :disabled="isLoading"
                  v-model="email"
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="Enter email"
                />
              </div>
              <div class="form-group">
                <input type="file" class="custom-file-input" id="customFile">
                <label for="customFile">Upload file</label>
              </div>
              <div style="text-align: center">
                <button class="btn btn-primary" style="submit">Submit</button>
              </div>
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
      name: "",
      email: "",
      location: "",
      isLoading: false,
    };
  },
  methods: {
    submitForm() {
      if (this.isLoading) return;

      let formData = {
        name: this.name,
        email: this.email,
        location: this.location,
      }


      this.isLoading = true;
      let url = "/api/user-input";
      axios
        .post(url,{formData})
        .then((res) => {
          this.isLoading = false;
          window.location.replace("/");
        })
        .catch((err) => {
          this.isLoading = false;
          console.log(err);
        });
    },
  },
};
</script>

<style scoped>
.form-container {
  border: 1px solid #111;
  padding: 30px;
  border-radius: 0.25rem;
}
</style>