
<template>
  <h4>Manual </h4>
  <h3>My name is {{fullNameManual()}}</h3>
  <h3>My name is {{fullNameManual()}}</h3>
  <h3>My name is {{fullNameManual()}}</h3>
  <h3>My name is {{fullNameManual()}}</h3>
  <h3>My name is {{fullNameManual()}}</h3>
  <hr>

  <h4>Computed </h4>
  <h3>My name is {{fullNameComputed}}</h3>
  <h3>My name is {{fullNameComputed}}</h3>
  <h3>My name is {{fullNameComputed}}</h3>
  <h3>My name is {{fullNameComputed}}</h3>
  <h3>My name is {{fullNameComputed}}</h3>

</template>

<script setup>

import {computed, ref} from "vue";

const firstName = ref("Sobuj");
const lastName = ref("Ahmed");

const fullNameComputed = computed(()=>{
  console.log("Computed Called");
  return `${firstName.value} ${lastName.value}`
});
function fullNameManual(){
  console.log("Maual Called");
  return `${firstName.value} ${lastName.value}`;
}
</script>