<template>
  <div class="login-form">
    <div class="title">
      <h3>Login with Skooli</h3>
    </div>
    <div class="form">
      <div class="input-box">
        <img src="../assets/images/icons/user.svg" />
        <input type="text" name="email" placeholder="Email Address" />
      </div>
      <div class="input-box">
        <img src="../assets/images/icons/lock.svg" />
        <input type="password" name="password" placeholder="Password" />
      </div>

      <button>Login</button>
      <div class="page-msg"></div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
.login-form .title {
  width: 85%;
  height: auto;
  margin: 0px auto;
}
button {
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  border: none;
  background-color: #4a3d99;
  color: #fff;
  font-size: 13pt;
  font-weight: bold;
  border-radius: 4px;
}
button:hover {
  cursor: pointer;
}

.login-form {
  width: 520px;
  /* height: 300px; */
  /* min-height: 360px; */
  background-color: #fff;
  border: 1px solid #d4d4d4;
  border-radius: 7px;
  box-shadow: 0px 0px 27px rgb(0 0 0/ 15%);
  margin: 0px auto;
  margin-top: 14vh;
  padding: 25px;
}
.login-form .title {
  width: auto;
  height: auto;
  text-align: center;
  margin-bottom: 50px;
}
.login-form .title h3 {
  font-size: 17px;
  font-weight: bold;
}
.login-form .form {
  width: 85%;
  height: auto;
  margin: 0px auto;
}

.input-box {
  width: auto;
  height: auto;
  padding: 8px 10px;
  background-color: #f4f4f4;
  border: 1px solid #cecece;
  border-radius: 4px;
  margin-bottom: 10px;
  overflow: hidden;
}
.input-box img {
  width: 20px;
  height: 20px;
  margin-right: 10px;
  object-fit: contain;
  opacity: 0.5;
  padding-top: 9px;
  float: left;
}
.input-box input {
  width: calc(100% - 55px);
  padding: 12px;
  font-size: 10pt;
  border: none;
  background-color: #f4f4f4;
  float: left;
  outline: none;
}
</style>
