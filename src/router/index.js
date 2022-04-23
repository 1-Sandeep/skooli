import { createRouter, createWebHistory } from "vue-router";

// import HomeView from "../views/HomeView.vue";
import HomePage from "../views/HomePage.vue";
import FeaturesPage from "../views/FeaturesPage.vue";
import AboutUsPage from "../views/AboutUsPage.vue";
import LoginPage from "../views/LoginPage.vue";
import RegisterPage from "../views/RegisterPage.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: HomePage,
    },

    {
      path: "/features/",
      name: "features",
      component: FeaturesPage,
    },
    {
      path: "/about-us/",
      name: "about-us",
      component: AboutUsPage,
    },
    {
      path: "/login/",
      name: "login",
      component: LoginPage,
    },
    {
      path: "/signup/",
      name: "signup",
      component: RegisterPage,
    },
  ],
});

export default router;
