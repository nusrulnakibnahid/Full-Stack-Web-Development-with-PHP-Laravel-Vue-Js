<script setup>
import { userInfo } from "../data/data";

// console.log(userInfo.imgUrl);
const a = 5;
const b = 6;
// let message = "";

// if (userInfo.role === "admin") {
//   message = "You are an admin";
// } else {
//   message = "You are a guest";
// }
</script>

<template>
  <h1>Demo Component</h1>
  <h2>User Information</h2>
  <div>
    <h2 v-if="userInfo.role === 'admin'">You are an admin</h2>
    <h2 v-else-if="userInfo.role === 'manager'">You are a manager</h2>
    <h2 v-else>You are a guest</h2>
    <!-- <h1>{{ a > b ? "a is greater" : "b is greater" }}</h1> -->
    <img :src="userInfo.imgUrl" alt="" width="200" height="200" />
    <div>
      <!-- <a v-if="userInfo.profileUrl" :href="userInfo.profileUrl">Profile URL</a> -->
      <a v-show="userInfo.profileUrl" :href="userInfo.profileUrl"
        >Profile URL</a
      >
    </div>
    <h3>Name: {{ userInfo.name }}</h3>
    <p>Profession: <span v-html="userInfo.profession"></span></p>
    <h3>Age: {{ userInfo.age }}</h3>
    <h3>Country: {{ userInfo.country }}</h3>
  </div>
</template>

<style scoped></style>
