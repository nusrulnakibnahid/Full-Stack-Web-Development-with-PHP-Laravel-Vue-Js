<script setup>
import {useCounterStore} from "./stores/counterStore.js";

const myCounter = useCounterStore();
</script>

<template>
  <h1>Hi, I am Father</h1>

  <h5>This is Num1 = {{ myCounter.num1 }}</h5>
  <h5>This is Num2 = {{ myCounter.num2 }}</h5>
  <button @click="myCounter.Plus">Plus</button>
  <button @click="myCounter.Minus">Minus</button>


</template>