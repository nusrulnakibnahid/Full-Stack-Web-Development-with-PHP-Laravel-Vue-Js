<script setup>
import { ref } from "vue";
import CarItem from "./CarItem.vue";
const cars = ref(["BMW", "Audi", "Mercedes"]);

function handleCars() {
  console.log("handleCars");
}
</script>

<template>
  <h1>Car List</h1>
  <ul>
    <CarItem :cars="cars" @car-clicked="handleCars" />
  </ul>
</template>

<style scoped></style>
