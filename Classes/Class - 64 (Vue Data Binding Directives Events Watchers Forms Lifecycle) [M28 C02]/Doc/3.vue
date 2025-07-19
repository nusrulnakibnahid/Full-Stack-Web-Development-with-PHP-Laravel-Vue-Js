
<template>
  <div v-html="rowContent"></div>

  <img v-bind:src="imgURL">
  <p>Short form</p>

  <img :src="imgURL">

  <hr>

  <h3 v-bind:style="{color:textColor}">Hello, CSS</h3>
</template>

<script setup>
const rowContent = '<h2 style="color: red">Hello raw content</h2>';

const imgURL = "https://cdn.ostad.app/course/cover/2024-12-19T15-48-52.487Z-Full-Stack-Web-Development-with-Python,-Django-&-React.jpg";

const textColor = "blue";

</script>