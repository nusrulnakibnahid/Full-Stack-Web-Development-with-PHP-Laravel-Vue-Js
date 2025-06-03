<script setup>
import { reactive } from 'vue'

const user = reactive({
  name: 'John Doe',
  role: 'Backend Developer',
  age: 25,
})
</script>

<template>
  <h1>From Object - {{ user.name }} - {{ user.role }} - {{ user.age }}</h1>
</template>

<style scoped></style>
