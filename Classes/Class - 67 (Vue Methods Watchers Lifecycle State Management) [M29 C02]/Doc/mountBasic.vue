<script setup>
import {onBeforeMount, onMounted, ref} from "vue";

const status = ref([]);

onMounted(()=>{
  console.log('Mounted');
  status.value.push('mounted');
})

onBeforeMount(()=>{
  console.log('Before Mount');
  status.value.push('before mount');
})

</script>

<template>

  <h1>Check {{status}}}</h1>

</template>
