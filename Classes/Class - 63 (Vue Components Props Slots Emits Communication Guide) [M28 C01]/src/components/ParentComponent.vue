<script setup>
import { ref } from "vue";

const name = ref("");
</script>

<template>
  <h1>Parent Component</h1>
  <h2>{{ name }}</h2>
  <input type="text" v-model="name" />
</template>

<style scoped></style>
