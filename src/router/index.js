import { createRouter, createWebHistory } from "vue-router";

//Front End Routes
// import HomeView from "../views/HomeView.vue";
import HomePage from "../views/website/HomePage.vue";
import FeaturesPage from "../views/website/FeaturesPage.vue";
import AboutUsPage from "../views/website/AboutUsPage.vue";
import LoginPage from "../views/website/LoginPage.vue";
import RegisterPage from "../views/website/RegisterPage.vue";

//Back End Routes
import Home from "../views/dashboard/Home.vue";
import Parent from "../views/dashboard/Parent.vue";
import Staff from "../views/dashboard/Staff.vue";
import Student from "../views/dashboard/Student.vue";
import Teacher from "../views/dashboard/Teacher.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    // Footer Routes
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

    // Back End Routes
    {
      path: "/dashboard/",
      name: "dashboard",
      component: Home,
    },
    {
      path: "/parent/",
      name: "parent",
      component: Parent,
    },
    {
      path: "/staff/",
      name: "staff",
      component: Staff,
    },
    {
      path: "/student/",
      name: "student",
      component: Student,
    },
    {
      path: "/teacher/",
      name: "teacher",
      component: Teacher,
    },
  ],
});

export default router;
