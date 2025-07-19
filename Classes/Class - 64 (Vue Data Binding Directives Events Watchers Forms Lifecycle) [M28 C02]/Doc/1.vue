
<template>
  <h1>This is Counter {{count}}</h1>
  <button @click="Plus">Plus</button>
  <button @click="Minus">Minus</button>
</template>

<script setup>
import {ref} from "vue";

const count = ref(0);

function Plus(){
  count.value = count.value+1;
}

function Minus(){
  count.value = count.value-1;
}
</script>