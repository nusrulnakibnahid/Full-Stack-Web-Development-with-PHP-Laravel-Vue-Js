<script setup>
import CarList from "./components/CarList.vue";
import ChildComponent from "./components/ChildComponent.vue";
import ParentComponent from "./components/ParentComponent.vue";
import SlotComponent from "./components/SlotComponent.vue";

import { ref } from "vue";

const name = ref("John");
</script>

<template>
  <h1>Parent Component</h1>
  <h2>{{ name }}</h2>
  <input type="text" v-model="name" />
  <hr />
  <ChildComponent v-model:name="name" />
  <!-- <ChildComponent v-model:address="address" /> -->
</template>

<style scoped></style>
