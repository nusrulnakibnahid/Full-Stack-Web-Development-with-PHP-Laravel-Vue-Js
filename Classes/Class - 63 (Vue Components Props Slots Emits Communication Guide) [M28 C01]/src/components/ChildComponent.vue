<script setup>
const name = defineModel("name");
// const address = defineModel("address");
</script>

<template>
  <h1>Child Component</h1>
  <h2>{{ name }}</h2>
  <input type="text" v-model="name" />
</template>

<style scoped></style>
