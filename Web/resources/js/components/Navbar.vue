<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <router-link class="navbar-brand" tag="a" to="/"
      >Augmented Flumen</router-link
    >
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarText"
      aria-controls="navbarText"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/map">Map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/user-input">Input</a>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" tag="a" to="/">Data2</router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {};
</script>

<style>
</style>