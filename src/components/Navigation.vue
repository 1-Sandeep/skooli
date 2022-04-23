<template>
  <nav>
    <div class="wrapper">
      <div class="logo">
        <router-link to="/">
          <img src="../assets/images/logo.svg" />
        </router-link>
      </div>

      <ul class="menu">
        <li>
          <router-link to="/features">Features</router-link>
        </li>
        <li>
          <router-link to="/about-us">About Us</router-link>
        </li>
        <li>
          <router-link to="/login">Login</router-link>
        </li>
        <li>
          <router-link to="/signup">Register</router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>
