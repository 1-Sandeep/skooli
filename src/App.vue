<template>
  <Navigation />

  <RouterView />
  <Footer />
  <!-- <router-view></router-view> -->
</template>

<script>
import Navigation from "./components/Navigation.vue";
import Footer from "./components/Footer.vue";
export default {
  components: {
    Navigation,
    Footer,
  },
};
</script>

<style>
* {
  margin: 0;
  padding: 0;
}

body {
  scroll-behavior: smooth;
}

body,
h1,
h2,
h3,
h4,
h5,
div,
p {
  font-family: "Open Sans", sans-serif;
}
</style>
