<script setup>
import { ref } from 'vue'

let text = ref('Hello World')

function changeText() {
  text.value = 'Goodbye World'
}
</script>

<template>
  <h1>{{ text }}</h1>
  <!-- <button v-on:click="changeText">Change the text</button> -->
  <!-- <button @click="changeText">Change the text</button> -->
</template>

<style scoped></style>
