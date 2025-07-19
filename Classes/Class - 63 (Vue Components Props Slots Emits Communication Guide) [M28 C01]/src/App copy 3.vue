<script setup>
import CarList from "./components/CarList.vue";
import SlotComponent from "./components/SlotComponent.vue";
</script>

<template>
  <!-- <CarList /> -->
  <SlotComponent>
    <!-- <template v-slot:header>
      <h1>Header</h1>
    </template> -->
    <template #header>
      <h1>Header</h1>
    </template>
    <template v-slot:footer>
      <h1>Footer</h1>
    </template>
  </SlotComponent>
</template>

<style scoped></style>
