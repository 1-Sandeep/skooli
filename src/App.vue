<template>
  <WebsiteView v-if="!isUserLogin" />
  <DashboardView v-else />
</template>

<script>
import WebsiteView from "./components/site-view/WebsiteView.vue";
import DashboardView from "./components/site-view/Dashboard.vue";

export default {
  components: {
    WebsiteView,
    DashboardView,
  },
  data() {
    return {
      isUserLogin: false,
    };
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
