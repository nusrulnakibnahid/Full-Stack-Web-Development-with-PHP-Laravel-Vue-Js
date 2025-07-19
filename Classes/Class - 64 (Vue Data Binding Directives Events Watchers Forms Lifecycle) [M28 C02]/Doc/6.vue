
<template>
  <h3 v-if="loggedIn">Welcome to Dashboard</h3>
  <h3 v-else>You have to Log In</h3>

  <hr>

  <h1 v-if="marks<=100 && marks>=80">A+</h1>
  <h1 v-else-if="marks<80 && marks>=70">A</h1>
  <h1 v-else-if="marks<70 && marks>=60">B</h1>
  <h1 v-else>F</h1>

  <hr>
  <h2 v-show="showText">This is a test text</h2>


</template>

<script setup>
const loggedIn = false;

const  marks = 18;
const showText = false;

</script>