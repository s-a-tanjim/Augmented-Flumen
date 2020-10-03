<template>
  <div>
    <component v-bind:is="'Navbar'"></component>
    <div></div>
  </div>
</template>

<script>
export default {
  data() {
    return {
    };
  },
  mounted() {
    /*if (document.getElementById('my-datatable')) return;
    var scriptTag = document.createElement("script");
    scriptTag.src =
      "https://maps.googleapis.com/maps/api/js?key=AIzaSyDgM7W_yu2AkRWFnM3JuGO9aVqsD7iQeLQ&callback=initMap&libraries=&v=weekly";
    scriptTag.id = "my-datatable";
    document.getElementsByTagName("head")[0].appendChild(scriptTag);*/
  },
  methods: {
    /*initMap() {
      this.map = new google.maps.Map(document.getElementById("google-map"), {
        center: {
          lat: -34.397,
          lng: 150.644,
        },
        zoom: 8,
      });
    },*/
  },
};
</script>

<style>
</style>