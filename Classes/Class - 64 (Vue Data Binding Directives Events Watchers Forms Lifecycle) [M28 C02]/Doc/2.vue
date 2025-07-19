
<template>
  <h1>This is Counter One= {{count.count1}}</h1>
  <h1>This is Counter Two= {{count.count2}}</h1>
  <button @click="Plus">Plus</button>
  <button @click="Minus">Minus</button>
</template>

<script setup>

import {reactive} from "vue";

const count = reactive({
  count1:0,
  count2:0
})


function Plus(){
  count.count1 = count.count1+1;
  count.count2 = count.count2-1;
}

function Minus(){
  count.count1 = count.count1-1;
  count.count2 = count.count2+1;
}
</script>