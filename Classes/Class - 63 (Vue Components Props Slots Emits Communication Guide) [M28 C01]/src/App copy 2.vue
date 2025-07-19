<script setup>
import { ref } from "vue";
import CarList from "./components/CarList.vue";

const cars = ref(["BMW", "Audi", "Mercedes"]);
</script>

<template>
  <CarList :cars="cars" title="Car List" />

  <CarList :cars="cars" title="Second Car List" />
</template>

<style scoped></style>
