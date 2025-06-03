<script setup>
import { ref } from 'vue'
const name = ref('John Doe')
const role = ref('Backend Developer')
const age = ref(25)
</script>

<template>
  <h1>{{ name }} - {{ role }} - {{ age }}</h1>
</template>

<style scoped></style>
