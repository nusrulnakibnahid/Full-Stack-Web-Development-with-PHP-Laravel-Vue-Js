<script setup>
const props = defineProps(["cars"]);

defineEmits(["car-clicked"]);

// const emit = defineEmits(["car-clicked"]);

// function handleCarItem() {
//   //   console.log("clicked");
//   emit("car-clicked");
// }
</script>

<template>
  <li @click="$emit('car-clicked')" v-for="car in cars" :key="car">
    {{ car }}
  </li>
  <!-- <li @click="handleCarItem" v-for="car in cars" :key="car">{{ car }}</li> -->
</template>

<style scoped></style>
