<template>
  <div class="register-form">
    <div class="title">
      <h3>Register with Skooli</h3>
    </div>
    <div class="form">
      <div class="multi-input">
        <div class="input-box left">
          <img src="../assets/images/icons/user.svg" />
          <input type="text" name="firstname" placeholder="First Name" />
        </div>
        <div class="input-box right">
          <img src="../assets/images/icons/user.svg" />
          <input type="text" name="lastname" placeholder="Last Name" />
        </div>
      </div>
      <div class="input-box">
        <img src="../assets/images/icons/mail.svg" />
        <input type="text" name="email" placeholder="Email Address" />
      </div>
      <div class="input-box">
        <img src="../assets/images/icons/lock.svg" />
        <input type="password" name="password" placeholder="Password" />
      </div>
      <div class="input-box">
        <img src="../assets/images/icons/lock.svg" />
        <input
          type="password"
          name="repassword"
          placeholder="Re-Type Password"
        />
      </div>

      <div class="input-box">
        <select name="country">
          <option value="Select a country">Select a country</option>
          <option value="">Nepal</option>
          <option value="">India</option>
          <option value="">Bhutan</option>
          <option value="">Bangladesh</option>
          <option value="">Pakistan</option>
          <option value="">Afganistan</option>
        </select>
      </div>

      <div class="input-box register">
        <button>Register</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
.multi-input {
  width: 100%;
  height: auto;
  overflow: hidden;
  margin-bottom: 10px;
}

.multi-input .input-box {
  width: calc(45% - 5px);
  float: left;
  margin: 0;
}

.multi-input .left {
  margin-right: 5px;
}
.multi-input .right {
  margin-left: 5px;
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
.input-box input,
.input-box select {
  width: calc(100% - 55px);
  padding: 12px;
  font-size: 10pt;
  border: none;
  background-color: #f4f4f4;
  float: left;
  outline: none;
}

.register-form {
  width: 520px;
  min-height: 480px;
  background-color: #ffffff;
  border: 1px solid #d4d4d4;
  border-radius: 7px;
  box-shadow: 0px 0px 27px rgb(0 0 0 / 15%);
  margin: 50px auto;
  margin-top: 5vh;
  padding: 25px;
}

.register-form .title {
  width: auto;
  height: auto;
  text-align: center;
  margin-bottom: 50px;
}
.register-form .title h3 {
  font-size: 17pt;
  font-weight: bold;
}

.register-form .form {
  width: 85%;
  height: auto;
  margin: 0px auto;
}

.register {
  background-color: transparent !important;
  border: none !important;
  padding: 0 !important;
}

.register button {
  background-color: #4a3d99;
  color: white;
  border-radius: 4px;
  padding: 18px 40px;
  text-decoration: none;
  display: block;
  margin-top: 5px;
  border: none;
  width: 100%;
}
</style>
