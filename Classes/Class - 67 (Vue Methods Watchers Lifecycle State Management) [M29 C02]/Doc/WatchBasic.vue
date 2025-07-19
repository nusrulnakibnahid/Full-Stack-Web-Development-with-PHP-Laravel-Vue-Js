<script setup>
import {ref, watch} from "vue";

const name = ref('');
const error = ref('');

watch(name,(newValue)=>{
  if (newValue.length === 0){
    error.value = '';
  }else if(newValue.length < 4){
    error.value = 'Name should be at least 4 character';
  }else {
    error.value = '';
  }
})
</script>

<template>
  <div>
    <h2>Enter your name</h2>
    <input v-model="name" type="text" placeholder="Enter your name">

    <p v-if="error">{{error}}</p>
    <p v-else-if="name">{{name}}</p>

  </div>
</template>


