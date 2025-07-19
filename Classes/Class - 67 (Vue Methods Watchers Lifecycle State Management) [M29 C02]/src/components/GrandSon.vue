<template>
  <h3>I am GrandSon</h3>
  <h1>This is Num1 = {{ count.num1 }}</h1>
  <h1>This is Num2 = {{ count.num2 }}</h1>
  <button @click="Plus">Plus</button>
  <button @click="Minus">Minus</button>
</template>

<script setup>
import {reactive} from "vue"; // Importing reactive from Vue

const count = reactive({
  num1: 0,
  num2: 0
}); // count is a reactive object

function Plus() {
  count.num1 = count.num1 + 1;
  count.num2 = count.num2 - 1;
}

function Minus() {
  count.num1 = count.num1 - 1;
  count.num2 = count.num2 + 1;
}
</script>